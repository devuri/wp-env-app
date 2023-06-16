<?php

use DevUri\Config\Kernel;

/**
 * Start the web application.
 *
 * @var Kernel
 */
$http_app = new Kernel(__DIR__, [

    /**
     * Web Root: the public web directory, we can change this to 'web' or 'html' etc.
     *
     * By default the project web root is set to public if we change this to something other than public
     * we will also need to edit composer.json, for example lets assume our web root is public_html
     *
     * "wordpress-install-dir":"public_html/wp",
     *  "installer-paths":{
     *     "public_html/app/mu-plugins/{$name}/":[
     *        "type:wordpress-muplugin"
     *     ],
     *     "public_html/app/plugins/{$name}/":[
     *        "type:wordpress-plugin"
     *     ],
     *     "public_html/template/{$name}/":[
     *        "type:wordpress-theme"
     *     ]
     */
    'web_root' => 'public',

    /**
     * Sets the content directory for the project.
     *
     * By default, the project uses the 'app' directory as the content directory.
     * The 'app' directory is equivalent to the 'wp-content' directory.
     * However, this can be modified to use a different directory, such as 'content'.
     */
    'content_dir' => 'app',

    /**
     * Sets the plugins directory.
     *
     * The plugins directory is located outside the project directory and
     * allows for installation and management of plugins using Composer.
     */
    'plugin_dir' => 'plugins',

    /**
     * Sets the directory for Must-Use (MU) plugins.
     *
     * The MU plugins directory is used to include custom logic that is considered essential for the project.
     * It provides a way to include functionality that should always be active and cannot be deactivated by site administrators.
     *
     * By default, the framework includes the 'compose' MU plugin, which includes the 'web_app_config' hook.
     * This hook can be leveraged to configure the web application in most cases.
     */
    'mu_plugin_dir' => 'mu-plugins',

    /**
     * Sets the default fallback theme for the project.
     *
     * By default, WordPress uses one of the "twenty*" themes as the fallback theme.
     * However, in our project, we have the flexibility to define our own custom fallback theme.
     */
    'default_theme' => 'brisko',

    /**
     * Controls whether we can deactivate plugins.
     *
     * This setting determines whether the option to deactivate plugins is available.
     * Setting it to false will hide the control to deactivate plugins,
     * but it does not remove the functionality itself.
     *
     * Setting it to true brings back the ability to deactivate plugins.
     * The default setting is true.
     */
    'can_deactivate' => false,

    /**
     * Sets the directory for additional themes.
     *
     * In addition to the default 'themes' directory, we can utilize the 'templates' directory
     * to include our own custom themes for the project. This provides flexibility and allows
     * us to have a separate location for our custom theme files.
     */
    'theme_dir' => 'templates',

    /**
     * Sets the error handler for the project.
     *
     * The framework provides options for using either Oops or Symfony as the error handler.
     * By default, the Symfony error handler is used.
     * To change the error handler, set the 'error_handler' option to 'oops'.
     * To disable the error handlers completely, set the 'error_handler' option to null.
     *
     * Please note that the error handler will only run in 'debug', 'development', or 'local' environments.
     */
    'error_handler' => null,

]);
