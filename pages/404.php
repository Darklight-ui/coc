<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>404 – Page Not Found</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    :root {
      --color-background: #fcfcfc;
      --color-surface: #f9f9f9;
      --color-border: #e5e5e5;

      --color-text-primary: #332a25;
      --color-text-secondary: #322924;
      --color-muted: #666666;

      --color-primary: #e36c08;
      --color-accent: #e26600;
      --color-danger: #e36c08;
      --color-warning: #e26600;
      --color-info: #332a25;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, sans-serif;
    }

    body {
      min-height: 100vh;
      background: var(--color-background);
      display: flex;
      align-items: center;
      justify-content: center;
      color: var(--color-text-primary);
    }

    .error-container {
      background: var(--color-surface);
      border: 1px solid var(--color-border);
      padding: 3rem 2.5rem;
      border-radius: 12px;
      text-align: center;
      max-width: 480px;
      width: 100%;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
    }

    .error-code {
      font-size: 6rem;
      font-weight: 800;
      color: var(--color-primary);
      line-height: 1;
      margin-bottom: 1rem;
    }

    .error-title {
      font-size: 1.5rem;
      font-weight: 600;
      color: var(--color-text-secondary);
      margin-bottom: 0.75rem;
    }

    .error-message {
      font-size: 1rem;
      color: var(--color-muted);
      margin-bottom: 2rem;
    }

    .actions {
      display: flex;
      justify-content: center;
      gap: 1rem;
      flex-wrap: wrap;
    }

    .btn {
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.2s ease;
    }

    .btn-primary {
      background: var(--color-primary);
      color: #fff;
    }

    .btn-primary:hover {
      background: var(--color-accent);
      transform: translateY(-1px);
    }

    .btn-secondary {
      border: 1px solid var(--color-border);
      color: var(--color-text-primary);
      background: transparent;
    }

    .btn-secondary:hover {
      border-color: var(--color-primary);
      color: var(--color-primary);
    }

    @media (max-width: 480px) {
      .error-code {
        font-size: 4.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="error-container">
    <div class="error-code">404</div>
    <h1 class="error-title">Page Not Found</h1>
    <p class="error-message">
      Sorry, the page you’re looking for doesn’t exist or has been moved.
    </p>

    <div class="actions">
      <a href="/" class="btn btn-primary">Go Home</a>
      <a href="javascript:history.back()" class="btn btn-secondary">Go Back</a>
    </div>
  </div>

</body>
</html>
