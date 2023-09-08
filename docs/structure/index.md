# Directory Structure

This provides specific directory structure framework structure and an overview of the purpose of each directory and key files.

## Directory Structure

```
├── public              # Web server root directory
│   ├── app             # WordPress core files (excluded from version control)
│   │   ├── uploads     # WordPress uploads directory
│   │   ├── templates   # Custom themes directory
│   │   └── themes      # WordPress themes directory
│   ├── mu-plugins      # Must-use plugins directory
│   ├── plugins         # WordPress plugins directory
│   ├── wp              # WordPress core files (excluded from version control)
│   ├── .htaccess       # Web server configuration file
│   ├── index.php       # WordPress entry point
│   └── wp-config.php   # WordPress configuration file
├── publickeys          # Public key used for encryption or verification purposes
│   └── samplekey.pub   # Example key b75b666f-ac11-4342-b001-d2546f1d3a5b.pub
├── storage             # Storage directory for backups, cache, and logs
│   ├── .backups        # Backup directory
│   ├── cache           # Cache directory
│   └── logs            # Logs directory
│       └── wp-errors   # WordPress error logs
├── vendor              # Composer dependencies directory
├── .env                # Environment configuration file
├── app.php             # Application configuration file
├── bootstrap.php       # Bootstrap file
├── composer.json       # Composer configuration file
└── config.php          # Project configuration file overrides framework constants.
```

## Directory Descriptions

### 1. `public`

The `public` directory is the web server root directory, and it contains WordPress core files and other assets needed to run the application. Here's what you'll find inside:

- `app`: This directory contains WordPress core files (which are typically excluded from version control systems). It also includes the `uploads` directory for storing uploaded media, the `templates` directory for custom themes, and the `themes` directory for WordPress themes.

- `mu-plugins`: This directory holds must-use plugins for WordPress.

- `plugins`: WordPress plugins directory.

- `wp`: This directory is for WordPress core files (also excluded from version control). It contains the core codebase for the WordPress application.

- `.htaccess`: This file is used for configuring web server settings.

- `index.php`: WordPress entry point.

- `wp-config.php`: WordPress configuration file.

### 2. `publickeys`

The `publickeys` directory is intended for storing public keys used for encryption or verification purposes. In this example, there's a sample public key file named `samplekey.pub`.

### 3. `storage`

The `storage` directory is meant for storing various application-related data, including backups, cache, and logs:

- `.backups`: This directory is for storing backup files.

- `cache`: The cache directory is used for temporary storage of cached data.

- `logs`: This directory contains log files. In this specific case, there's a subdirectory named `wp-errors` for WordPress error logs.

### 4. `vendor`

The `vendor` directory contains Composer dependencies. Composer is a PHP dependency management tool, and this directory holds the packages and libraries required by the project.

### 5. `.env`

The `.env` file is the environment configuration file. It typically contains environment-specific settings and secrets, such as database credentials, API keys, or other configuration variables.

### 6. `app.php`

`app.php` is the application configuration file. It may define application-specific settings and configurations.

### 7. `bootstrap.php`

`bootstrap.php` is the bootstrap file. It's responsible for initializing the application and setting up the environment before it starts running.

### 8. `composer.json`

`composer.json` is the configuration file for Composer. It defines project dependencies and other configuration settings for Composer.

### 9. `config.php`

`config.php` is the project configuration file that can override framework constants or provide custom configuration settings for the project.


> Understanding this structure will be beneficial for developers and contributors working with the framework.
