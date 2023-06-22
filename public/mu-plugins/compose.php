<?php

/**
 * Composed.
 *
 * @author            Uriel Wilson
 * @copyright         2023 Uriel Wilson
 * @license           GPL-2.0
 *
 * @wordpress-plugin
 * Plugin Name:       Web App Core
 * Plugin URI:        https://github.com/devuri/wp-env-app
 * Description:       Web Application provides `web_app_config` action and bootstrap file.
 * Version:           0.0.1
 * Requires at least: 5.3.0
 * Requires PHP:      7.3.5
 * Author:            Uriel
 * Author URI:        https://urielwilson.com
 * Text Domain:       wp-env-composed
 * Domain Path:       languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Network: true
 */

if ( ! \defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Must-use plugins are loaded before normal plugins.
 *
 * Must-use plugins are typically used for critical functionality or site-wide customizations
 * that should always be active which makes this hook a good place to add critical functionality
 * @var [type]
 */
do_action( 'web_app_config', get_http_env() );

/**
 * Start and load core plugin.
 */
if ( function_exists( 'wpc_app_config_core' ) ) {
    wpc_app_config_core();
}
