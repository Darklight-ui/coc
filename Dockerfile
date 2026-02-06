# Base image
FROM php:8.2-apache

# Enable Apache rewrite module (needed for .htaccess)
RUN a2enmod rewrite

# Install PHP extensions (add more if needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set Apache document root to project root
ENV APACHE_DOCUMENT_ROOT /var/www/html

# Update Apache config to use new document root
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' \
    /etc/apache2/sites-available/*.conf \
    /etc/apache2/apache2.conf

# Copy project files
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose Apache port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
