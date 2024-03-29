<?php
/*
 * This file contains configuration settings for the web application.
 *
 * It can be used to define constants, variables, and other settings that are used throughout the application.
 * By modifying the values in this file, you can change how the application behaves in different environments (e.g., development, staging, production).
 *
 * It's strongly recommended that you use use the .env file to store sensitive information (e.g., API keys, database credentials).
 * This allows you to keep your sensitive information separate from your codebase and prevent accidental exposure.
 *
 * You use this file to override default WordPress constants set by the framework.
 * For example, you can define a new value for the `WP_DEBUG` constant to enable or disable debugging mode.
 *
 * If you need to modify the behavior of the application, you should do so by changing the values in this file, rather than modifying the core code.
 * This makes it easier to maintain the application and deploy updates without introducing new bugs or breaking changes.
 *
 * WordPress Constants Overview
 * @see [WordPress Constants Documentation](https://gist.github.com/MikeNGarrett/e20d77ca8ba4ae62adf5)
 *
 * IMPORTANT: The wp-env-framework already establishes many essential constants. This file allows
 * modifications to the default framework behavior. It's generally not recommended to edit this file except 
 * in specific, rare circumstances. Before making any changes, it is advised to consult the framework documentation. 
 * Often, you may find that modifications to this file are unnecessary.
 *
 * For additional information, refer to:
 * - Framework `app.php` Configuration: [https://devuri.github.io/wp-env-app/configuration/](https://devuri.github.io/wp-env-app/configuration/)
 * - Environment Variables: [https://devuri.github.io/wp-env-config/env/](https://devuri.github.io/wp-env-config/env/)
 */


// set the application in maintenance mode.
//define('HTTP_ENV_DOWN', false );

// This will override FORCE_SSL_ADMIN and FORCE_SSL_LOGIN constant set by framework.
// define('FORCE_SSL_ADMIN', false );
// define('FORCE_SSL_LOGIN', false );
