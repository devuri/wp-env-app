<?php

use DevUri\Config\Setup;

if ( file_exists( \dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once \dirname( __FILE__ ) . '/vendor/autoload.php';
} else {
    exit("Cant find the vendor autoload file.");
}


/**
 * define public web root dir.
 */
define('PUBLIC_WEB_ROOT', __DIR__ . '/public');

// Custom Directory PATH.
define('APP_DIR', '/content' );
define('WP_CONTENT_DIR', PUBLIC_WEB_ROOT . APP_DIR );

// Custom Content Directory URL.
define('CONTENT_DIR', APP_DIR );
define('WP_CONTENT_URL', env('WP_HOME') . CONTENT_DIR );

/**
 * The base configuration for WordPress
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
Setup::init(__DIR__)->config(); // production
