<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

if ( file_exists( __DIR__ . '/.maintenance' ) ) {
	require_once __DIR__ . '/../storage/maintenance.php';
	exit();
}

if ( file_exists( __DIR__ . '/wp/wp-blog-header.php' ) ) {
	require __DIR__ . '/wp/wp-blog-header.php';
} else {
    exit("Looks like the framework is not setup, run setup or composer install.");
}
