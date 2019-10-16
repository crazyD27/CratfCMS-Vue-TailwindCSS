<?php
/**
 * Yii Application Config
 *
 * You can define custom modules and system components, and even override the
 * built-in system components.
 *
 * If you want to modify the application config for *only* web requests or
 * *only* console requests, create an app.web.php or app.console.php file in
 * your config/ folder, alongside this one.
 */

return [
    /**
     * Modules accessible but not auto-loaded.
     */
    'modules' => [
        // 'my-module' => \modules\Module::class,
    ],

    /**
     * Modules to be loaded on every request.
     */
    'bootstrap' => [
        // 'my-module'
    ],
];
