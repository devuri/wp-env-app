# A Lightweight WordPress Project Framework

A lightweight framework for your next WordPress web application. It aims to provide a clean and organized structure for managing WordPress projects, making it easier to develop, deploy, and maintain WordPress websites.

> ⚠️ Work in progress ⚠️
> 
> This project is currently in active development. If you're interested in using this framework, pull requests and issues are welcome.

## Features

- **Modular Structure**: Promotes a modular approach to WordPress development, allowing you to organize your code into separate modules or packages for better code organization and reusability.
- **Dependency Management**: With the help of Composer, allows you to manage your WordPress plugins, themes, and libraries effortlessly. It provides a composer.json file to easily include and update dependencies.
- **Environment Configuration**: Implements the concept of environment-specific configurations using the `.env` file. You can define environment variables for different environments (e.g., development, staging, production) to easily manage database connections, API keys, and other environment-specific settings.
- **Enhanced Security**: By moving sensitive files outside of the web root directory, it helps improve the security of your WordPress installation. Critical files are stored outside the public directory, preventing direct access.
- **Version Control Friendly**: Encourages the use of version control systems like Git. By separating core WordPress files from your project files, it makes it easier to manage and track changes to your custom code while excluding WordPress core files from version control.
- **Modern Development Workflow**: Embraces modern development practices, allowing you to use build tools like Webpack for asset management and build processes. You can easily integrate frontend frameworks or preprocessors into your project for an optimized development workflow.

## Requirements

To use get started, make sure your environment meets the following requirements:

- PHP version 7.4 or higher
- Composer (https://getcomposer.org)

## Installation

Run the following command in your terminal:

```shell
composer create-project devuri/wp-env-app blog
```

> or

1. Clone or download the repository to your local development environment.
2. Install dependencies by running `composer install` in the project root directory.
3. Rename the `.env.example` file to `.env` and customize it according to your environment settings.
4. Set up your web server to point to the `public` directory as the document root.
5. Run the WordPress installation process through your web browser.
6. Start building your awesome WordPress project!

## Folder Structure

Here's an overview of the directory structure used:

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

## Additional Customization

wp-env-app  allows for additional customization options. Here are some examples:

**Modify Web Root**: By default, the project web root is set to `public`. To change it to something other than `public`, edit `app.php` and `composer.json`. For example, if the web root is set as `public_html`, update the following sections:

> composer.json:

```shell
 "extra":{
    "wordpress-install-dir": "public_html/wp",
    "installer-paths": {
        "public_html/app/mu-plugins/{$name}/": [
            "type:wordpress-muplugin"
        ],
        "public_html/app/plugins/{$name}/": [
            "type:wordpress-plugin"
        ],
        "public_html/template/{$name}/": [
            "type:wordpress-theme"
        ]
    }
}
```

> app.php:

```php
    return [
        'web_root'      => 'public_html', // web root is now set as public_html
        'content_dir'   => 'app',
        'plugin_dir'    => 'app/plugins',
        'mu_plugin_dir' => 'app/mu-plugins',
        'default_theme' => 'brisko',
    ];
```

## Configuration

The `app.php` file contains various configuration options that you can customize based on your project requirements. Here's an overview of the available options:

- `web_root`: Sets the public web directory (default: `public`).
- `asset_dir`: Sets the global assets directory (default: `assets`).
- `content_dir`: Sets the content directory for the project (default: `app`).
- `plugin_dir`: Sets the directory for installing and managing plugins (default: `plugins`).
- `mu_plugin_dir`: Sets the directory for Must-Use (MU) plugins (default: `mu-plugins`).
- `sqlite_dir`: Sets the directory for the SQLite database (default: `sqlitedb`).
- `sqlite_file`: Sets the filename for the SQLite database (default: `.sqlite-wpdatabase`).
- `default_theme`: Sets the default fallback theme (default: `brisko`).
- `disable_updates`: Disables WordPress updates (default: `true`).
- `can_deactivate`: Controls whether plugins can be deactivated (default: `false`).
- `theme_dir`: Sets the directory for additional themes (default: `templates`).
- `error_handler`: Sets the error handler for the project (default: Symfony error handler).
- `config_file`: Sets the name for the project config overrides file (default: `config`).

> Feel free to modify these options as needed to fit your project's directory structure and requirements.

## Errors

The framework allows for the use of `oops` (whoops) or `Symfony` as the error handler.

By default, the Symfony error handler is used. To change the error handler, set the `error_handler` option to `oops`. To disable the error handlers completely, set the `error_handler` option to `null`.

> Please note that the error handler will only run in `debug`, `development`, or `local` environments.

## Private Repository

You can use the `auth.json` file to install private themes and plugins hosted on GitHub etc using Composer. Follow the steps below:

1. Create a new access token on GitHub by going to the token settings: https://github.com/settings/tokens.
2. Generate a new token with the necessary repository access permissions.
3. Create an `auth.json` file in the root directory of your project.
4. Add the following content to the `auth.json` file, replacing `<GITHUB_TOKEN>` with your actual token:

```shell
{
    "github-oauth": {
        "github.com": "<GITHUB_TOKEN>"
    }
}
```

5. In your `composer.json` file, include the private repositories and required packages as shown in the example provided:

```shell
{
  "name": "your-project-name",
  "description": "Your project description",
  "require": {
    "wpackagist-plugin/woocommerce": "^5.5",
    "wpackagist-theme/twentytwenty": "^1.9",
    "<GITHUB_USERNAME>/<REPO_NAME_1>": "^1.0",
    "<GITHUB_USERNAME>/<REPO_NAME_2>": "^2.0"
  },
  "repositories": [
    {
      "type": "composer",
      "url": "https://wpackagist.org"
    },
    {
      "type": "vcs",
      "url": "https://github.com/<GITHUB_USERNAME>/<REPO_NAME_1>"
    },
    {
      "type": "vcs",
      "url": "https://github.com/<GITHUB_USERNAME>/<REPO_NAME_2>"
    }
  ]
}

```

For a fully detailed guide on how to set up private repositories with your project, refer to the [GitHub guide](https://github.com/devuri/Install-Theme-via-Composer-from-Private-Repository-on-GitHub).


Congratulations! You now have wp-env-app  up and running. Enjoy developing your WordPress web applications with a lightweight and modular framework. Should you have any questions or encounter any issues submit them through the [issue tracker](https://github.com/devuri/wp-env-app/issues).

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements. Feel free to fork the repository and submit pull requests to contribute to the project.
