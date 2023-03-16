<?php

use DevUri\Config\Setup;

if ( file_exists( \dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once \dirname( __FILE__ ) . '/vendor/autoload.php';
} else {
    exit("Cant find the vendor autoload file.");
}

/**
 * The base configuration for WordPress
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */
Setup::init(__DIR__)->config(); // production
