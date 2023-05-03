<?php

/**
 * Composed.
 *
 * @author            Uriel Wilson
 * @copyright         2023 Uriel Wilson
 * @license           GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name:       Web App Config
 * Plugin URI:        https://github.com/devuri/wp-env-app
 * Description:       Web Application provides `web_app_config` action and bootstrap file.
 * Version:           0.0.1
 * Requires at least: 5.3.0
 * Requires PHP:      7.3.5
 * Author:            Uriel Wilson
 * Author URI:        https://urielwilson.com
 * Text Domain:       compose
 * Domain Path:       languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Network: true
 */

if ( ! \defined( 'ABSPATH' ) ) {
    exit;
}

// ready.
do_action( 'web_app_config' );

// plugin.
DevUri\Config\App\Core\Plugin::init();
