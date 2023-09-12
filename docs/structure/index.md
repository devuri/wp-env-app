# Directory Structure

This document provides an overview of the directory structure of our framework, including the purpose of each directory and key files.

## Directory Structure

```
├── .snapshot           # New top-level directory for snapshots (replaces backups)
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
│   └── samplekey.pub   # Example key: b75b666f-ac11-4342-b001-d2546f1d3a5b.pub
├── storage             # Storage directory for cache and logs
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

### 1. `.snapshot`

The `.snapshot` directory is a new top-level directory introduced to replace the previous "backups" directory within the "storage" directory. It serves as a location for storing snapshots or backups of the application.

### 2. `public`

The `public` directory is the web server root directory and contains essential WordPress core files and assets required to run the application. Here's what you'll find inside:

- `app`: This directory holds WordPress core files (typically excluded from version control) and includes the `uploads` directory for media uploads, the `templates` directory for custom themes, and the `themes` directory for WordPress themes.

- `mu-plugins`: Must-use plugins for WordPress.

- `plugins`: WordPress plugins directory.

- `wp`: WordPress core files (also excluded from version control), containing the core codebase for the WordPress application.

- `.htaccess`: Web server configuration file.

- `index.php`: WordPress entry point.

- `wp-config.php`: WordPress configuration file.

### 3. `publickeys`

The `publickeys` directory is intended for storing public keys used for encryption or verification purposes. In this example, there's a sample public key file named `samplekey.pub`.

### 4. `storage`

The `storage` directory is meant for storing various application-related data, including cache and logs:

- `cache`: The cache directory is used for temporary storage of cached data.

- `logs`: This directory contains log files, and in this specific case, there's a subdirectory named `wp-errors` for WordPress error logs.

### 5. `vendor`

The `vendor` directory contains Composer dependencies. Composer is a PHP dependency management tool, and this directory holds the packages and libraries required by the project.

### 6. `.env`

The `.env` file is the environment configuration file, typically containing environment-specific settings and secrets, such as database credentials, API keys, or other configuration variables.

### 7. `app.php`

`app.php` serves as the application configuration file and may define application-specific settings and configurations.

### 8. `bootstrap.php`

`bootstrap.php` functions as the bootstrap file, responsible for initializing the application and setting up the environment before it starts running.

### 9. `composer.json`

`composer.json` continues to be the configuration file for Composer, defining project dependencies and other configuration settings for Composer.

### 10. `config.php`

`config.php` is the project configuration file that can override framework constants or provide custom configuration settings for the project.

> Understanding this structure is crucial for developers and contributors working with the framework.
