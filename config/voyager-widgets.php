<?php

return [

    /*
     * If enabled for voyager-widgets package.
     */
    'enabled' => env('VOYAGER_WIDGETS_ENABLED', true),

    /*
    | Here you can specify for which data type slugs widgets is enabled
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'allowed_slugs' => array_filter(explode(',', env('VOYAGER_WIDGETS_ALLOWED_SLUGS', '*'))),

    /*
    | Here you can specify for which data type slugs widgets is not allowed
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_WIDGETS_NOT_ALLOWED_SLUGS', ''))),

    /*
     * The config_key for voyager-widgets package.
     */
    'config_key' => env('VOYAGER_WIDGETS_CONFIG_KEY', 'joy-voyager-widgets'),

    /*
     * The route_prefix for voyager-widgets package.
     */
    'route_prefix' => env('VOYAGER_WIDGETS_ROUTE_PREFIX', 'joy-voyager-widgets'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerWidgets\\Http\\Controllers',
    ],
];
