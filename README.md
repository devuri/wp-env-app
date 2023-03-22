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
