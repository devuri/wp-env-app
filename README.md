# wp-env-app
A base WordPress project to create web applications using environment variables.

### Installation

To use `wp-env-app`, you can install it via Composer. Run the following command in your terminal:

```shell
composer create-project devuri/wp-env-app .
```
### Usage

To get started, create a `.env` file in the root directory of your project. 
In this file, define the environment variables you wish to use as configuration constants. For example:
> update the database credentials and other settings as needed.
```shell
WP_HOME='https://example.com'
WP_SITEURL="${WP_HOME}"

WP_ENVIRONMENT_TYPE='production'
DEVELOPER_ADMIN='0'

MEMORY_LIMIT='256M'
MAX_MEMORY_LIMIT='256M'

DB_NAME=wp_dbName
DB_USER=root
DB_PASSWORD=
DB_HOST=localhost
DB_PREFIX=wp_
```
### Modify Web Root
By default the project web root is set to `public` to change this to something other than public edit `app.php` and `composer.json`, for example lets assume our web root is `public_html`
> composer.json
```shell
   "extra":{
      "wordpress-install-dir":"public/wp",
      "installer-paths":{
         "public_html/app/mu-plugins/{$name}/":[
            "type:wordpress-muplugin"
         ],
         "public_html/app/plugins/{$name}/":[
            "type:wordpress-plugin"
         ],
         "public_html/app/themes/{$name}/":[
            "type:wordpress-theme"
         ]
      }
   }
```

> and then in app.php
```php
$http_app = new Kernel( __DIR__, [
    'web_root'      => 'public_html',
    'content_dir'   => 'app',
    'plugin_dir'    => 'app/plugins',
    'mu_plugin_dir' => 'app/mu-plugins',
    'default_theme' => 'brisko',
] );
```
### Configuration
**Error handler:** the framework allows for the use of oops or symfony.
The default error handler is symfony, to change the handler use `init(['errors' => 'oops'])`
to disable the handlers completely use `init(['errors' => null])`
> error handlers only run in 'debug', 'development' or 'local'.

