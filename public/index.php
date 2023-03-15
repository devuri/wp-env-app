<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

// maintenance.
if ( defined('HTTP_ENV_DOWN') && true === HTTP_ENV_DOWN ) {
    require dirname(__DIR__) . '/storage/maintenance.php'; exit;
}

if ( file_exists( __DIR__ . '/wp/wp-blog-header.php' ) ) {
	require __DIR__ . '/wp/wp-blog-header.php';
} else {
    exit("Looks like apt9 is not setup run setup to install.");
}
