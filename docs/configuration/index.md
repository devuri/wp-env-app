# WordPress Framework `app.php` Configuration

The `app.php` file is an essential part of the Framework, allowing you to customize various configuration options to tailor your project to specific requirements. This provides an overview of the available configuration options and how to use them effectively.

## Table of Contents

1. [Introduction](#introduction)
2. [Configuration Options](#configuration-options)
3. [Usage](#usage)
4. [Examples](#examples)

## Introduction

The `app.php` file is a central configuration file in the framework, enabling you to define settings and parameters for your WordPress project. It provides flexibility and customization options, ensuring your project aligns with your needs.

## Configuration Options

Here's a breakdown of the available configuration options in `app.php`:

- `security`: Configure security-related settings such as encryption, brute-force protection, two-factor authentication, and more.

- `mailer`: Set up various mailer services with their respective API keys for sending emails. Options include Brevo, Postmark, SendGrid, MailerLite, Mailgun, and SES (Amazon Simple Email Service).

- `sudo_admin` and `sudo_admin_group`: Control the super admin user and group settings.

- `web_root`: Define the public web directory.

- `s3uploads`: Configure settings related to Amazon S3 uploads, including bucket details, URL, and cache control.

- `asset_dir`: Set the global assets directory.

- `content_dir`: Define the content directory for the project.

- `plugin_dir`: Specify the directory for installing and managing plugins.

- `mu_plugin_dir`: Set the directory for Must-Use (MU) plugins.

- `sqlite_dir` and `sqlite_file`: Configure the directory and filename for the SQLite database.

- `default_theme`: Define the default fallback theme.

- `disable_updates`: Disable WordPress updates.

- `can_deactivate`: Control whether plugins can be deactivated.

- `theme_dir`: Specify the directory for additional themes.

- `error_handler`: Set the error handler for the project.

- `redis`: Configure Redis settings for caching and performance optimization.

- `publickey` and `publickey_dir`: Define public key settings and directories.

## Usage

To customize your WordPress project's configuration, follow these steps:

1. Open the `app.php` file in the Framework installation.

2. Locate the configuration options you want to modify.

3. Update the values according to your project requirements.

4. Save the `app.php` file.

## Examples

### Mailer Configuration

```php
'mailer' => [
    'brevo' => [
        'apikey' => env('BREVO_API_KEY'),
    ],
    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],
    // Add other mailer configurations here...
],
```

### Security Configuration

```php
'security' => [
    'encryption_key'     => null,
    'brute-force'        => true,
    'two-factor'         => true,
    'no-pwned-passwords' => true,
    'admin-ips'          => [],
],
```

