# PHP Dockerized Application

This project is a production‑ready **PHP application running on Docker (PHP 8.2 + Apache)** with secure `.env` handling and optional MySQL support.

It is designed to be simple, secure, and easy to deploy on a VPS or cloud server.

---

## 🚀 Features

* PHP 8.2 + Apache
* `.htaccess` support (`mod_rewrite` enabled)
* Secure `.env` environment variable handling
* MySQL support via Docker
* Production‑ready configuration
* Easy local & live deployment

---

## 📁 Project Structure

```
.
├── assets/
├── config/
│   └── env.php
├── includes/
├── pages/
├── .env            # NOT committed
├── .dockerignore
├── .gitignore
├── docker-compose.yml
├── Dockerfile
├── index.php
└── README.md
```

---

## 🔐 Environment Variables (.env)

Create a `.env` file in the project root:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_HOST=db
DB_NAME=your_database
DB_USER=your_user
DB_PASS=your_password
```

⚠️ **Never commit `.env` to GitHub**

Make sure `.env` exists in:

* `.gitignore`
* `.dockerignore`

---

## 🧠 Loading Environment Variables in PHP

The app uses a lightweight custom env loader.

File: `config/env.php`

```php
require_once __DIR__ . '/config/env.php';
```

Access variables anywhere:

```php
$dbHost = getenv('DB_HOST');
```

---

## 🐳 Docker Setup

### Build & Run (Production)

```bash
docker compose up -d --build
```

App will be available at:

```
http://localhost
```

---

## 🗄️ MySQL (Optional)

The `docker-compose.yml` includes a MySQL 8 container.

Connection details inside PHP:

```php
$pdo = new PDO(
    "mysql:host=" . getenv('DB_HOST') . ";dbname=" . getenv('DB_NAME'),
    getenv('DB_USER'),
    getenv('DB_PASS')
);
```

Database data is persisted using Docker volumes.

---

## 🛡️ Production Security

### Apache Security

* `ServerTokens Prod`
* `ServerSignature Off`

### Protect `.env`

Add to `.htaccess`:

```apache
<Files ".env">
    Order allow,deny
    Deny from all
</Files>
```

### PHP Errors

```apache
php_flag display_errors Off
php_value log_errors On
```

---

## 📦 Deployment

This setup works on:

* Ubuntu VPS
* DigitalOcean
* AWS EC2
* Railway
* Fly.io

### Typical VPS Steps

```bash
git clone your-repo
cd project
docker compose up -d --build
```

---

## 🧪 Useful Commands

```bash
# View logs
docker logs freshtag_app

# Stop containers
docker compose down

# Rebuild
docker compose up -d --build
```

---

## 📝 Notes

* Frontend assets (Tailwind / Node) should be built **before production**
* This setup avoids mounting volumes in production for better security

---

## 👨‍💻 Maintainer

Built and maintained by **FreshTag Entertainment / Developer Team**

---

## ✅ License

This project is private and proprietary.
