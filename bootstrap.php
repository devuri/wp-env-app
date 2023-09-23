<?php

/*
 * This is the bootstrap file for the web application.
 *
 * It loads the necessary files and sets up the environment for the application to run.
 * This includes initializing the Composer autoloader,  which is used to load classes and packages.
 *
 * The application uses Composer to manage dependencies and packages including WordPress themes and plugins, which allows you to easily add, update, and remove packages as needed.
 * To install or update packages, you can use the `composer` command line.
 *
 * IMPORTANT: Do NOT modify this file unless you are sure of what you are doing.
 * Any changes you make to this file may affect the behavior of the entire application and cause errors or unexpected behavior.
 * If you are unsure about how to modify the application, please refer to the documentation or seek assistance from a qualified developer.
 *
 * To modify the setup, please refer to the documentation for instructions.
 *
 */
if (file_exists(\dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once \dirname(__FILE__) . "/vendor/autoload.php";
} else {
    exit("Cant find the vendor autoload file.");
}

/**
 * Start and bootstrap the web application.
 *
 * @var Kernel
 */
$http_app = wpc_app(__DIR__);

/*
 * Load constant overrides.
 *
 * This will load constant values that override constants defined in setup.
 */
$http_app->overrides();

/*
 * Configuration settings for your web application.
 *
 * We recommend using the .env file to set these values.
 * The possible values are: 'debug', 'development', 'staging', 'production', or 'secure'.
 * The web application will use either the value of WP_ENVIRONMENT_TYPE or 'production'.
 *
 * Error handler: the framework allows for the use of oops or symfony.
 * The default error handler is symfony, to change the handler use `init(['errors' => 'oops'])`
 * to disable the handlers completely use `init(['errors' => null])`
 * error handler only run in 'debug', 'development' or 'local'.
 *
 * If you want to set the environment to 'development', add the following to your .env
 * WP_ENVIRONMENT_TYPE=development
 */
$http_app->init();

/**
 * Retrieve and display a list of $_ENV variables, with some sensitive data obfuscated through hashing.
 *
 * This calls the 'get_server_env' method of the '$http_app' object to obtain an array
 * containing defined $_ENV variables. Some of the sensitive information is hashed for security.
 * The resulting array is then output using 'var_dump' for debugging purposes.
 *
 * @var array
 */
// var_dump( $http_app->get_server_env() );

/**
 * Retrieve and display a list of defined constants, with sensitive data obfuscated through hashing.
 *
 * This function calls the 'get_user_constants' method of the '$http_app' object to obtain an array
 * containing defined constants. Sensitive information within these constants is hashed for security.
 * The resulting array is then output using 'var_dump' for debugging purposes.
 *
 * @var array
 */
// var_dump( $http_app->get_user_constants() );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = env("DB_PREFIX");
