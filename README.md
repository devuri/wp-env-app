# wp-env-app
A base WordPress project to create web applications using environment variables.

⚠️ Work in progress ⚠️

## Installation

To use `wp-env-app`, you can install it via Composer. Run the following command in your terminal:

```shell
composer create-project devuri/wp-env-app blog
```
## Usage

To get started, create a `.env` file in the root directory of your project. 
In this file, define the environment variables you wish to use as configuration constants. For example:
> update the database credentials and other settings as needed.
```shell
WP_HOME='http://example.com'
WP_SITEURL="${WP_HOME}/wp"

USE_APP_THEME=true
WP_ENVIRONMENT_TYPE='debug'
DEVELOPER_ADMIN='0'

MEMORY_LIMIT='256M'
MAX_MEMORY_LIMIT='256M'

FORCE_SSL_ADMIN=false
FORCE_SSL_LOGIN=false

DB_NAME=wp_dbName
DB_USER=root
DB_PASSWORD=
DB_HOST=localhost
DB_PREFIX=wp_

```
## Application Customization
Customize the configuration options in the `app.php` file located in the root directory of the project.

### Configuration

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
- `config_file`: Sets the name for the project config overrides file (default: config).

Feel free to modify these options as needed to fit your project's directory structure and requirements.
> **IMPORTANT**: Do NOT modify the bootstrap file unless you fully understand its purpose. Any changes made to the bootstrap file can impact the behavior of the entire application and lead to errors or unexpected behavior.

## Additional Customization

### Modify Web Root
By default the project web root is set to `public` to change this to something other than public edit `app.php` and `composer.json`, for example lets assume our web root is `public_html`
> composer.json
```shell
   "extra":{
      "wordpress-install-dir":"public_html/wp",
      "installer-paths":{
         "public_html/app/mu-plugins/{$name}/":[
            "type:wordpress-muplugin"
         ],
         "public_html/app/plugins/{$name}/":[
            "type:wordpress-plugin"
         ],
         "public_html/template/{$name}/":[
            "type:wordpress-theme"
         ]
      }
   }
```

> and then in app.php
```php
return [
    'web_root'      => 'public_html', // web root is now set as public_html
    'content_dir'   => 'app',
    'plugin_dir'    => 'app/plugins',
    'mu_plugin_dir' => 'app/mu-plugins',
    'default_theme' => 'brisko',
];
```
## Errors
**Error handler:** the framework allows for the use of oops or symfony.

The framework provides options for using either Oops or Symfony as the error handler.
By default, the Symfony error handler is used.
To change the error handler, set the `error_handler` option to `oops`.
To disable the error handlers completely, set the `error_handler` option to `null`.

> Please note that the error handler will only run in 'debug', 'development', or 'local' environments.

## Private Repository
We can use `auth.json` file to install private themes and plugins hosted on GitHub using Composer.
> Here's an example composer.json file that includes both the wpackagist repository and a private repository:

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
Read this fully detailed guide on how to setup private repos with your project: https://github.com/devuri/Install-Theme-via-Composer-from-Private-Repository-on-GitHub

### github-oauth

To create a new access token, head to your token settings:https://github.com/settings/tokens section on Github and generate a new token.

```shell
# auth.json
{
    "github-oauth": {
        "github.com": "token"
    }
}
```

> https://getcomposer.org/doc/articles/authentication-for-private-packages.md#github-oauth
