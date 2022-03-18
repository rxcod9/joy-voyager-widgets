<?php

return [

    /*
     * If enabled for voyager-replace-keyword package.
     */
    'enabled' => env('VOYAGER_REPLACE_KEYWORD_ENABLED', true),

    /*
    | Here you can specify for which data type slugs replace-keyword is enabled
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'allowed_slugs' => array_filter(explode(',', env('VOYAGER_REPLACE_KEYWORD_ALLOWED_SLUGS', '*'))),

    /*
    | Here you can specify for which data type slugs replace-keyword is not allowed
    | 
    | Supported: "*", or data type slugs "users", "roles"
    |
    */

    'not_allowed_slugs' => array_filter(explode(',', env('VOYAGER_REPLACE_KEYWORD_NOT_ALLOWED_SLUGS', ''))),

    /*
     * The config_key for voyager-replace-keyword package.
     */
    'config_key' => env('VOYAGER_REPLACE_KEYWORD_CONFIG_KEY', 'joy-voyager-replace-keyword'),

    /*
     * The route_prefix for voyager-replace-keyword package.
     */
    'route_prefix' => env('VOYAGER_REPLACE_KEYWORD_ROUTE_PREFIX', 'joy-voyager-replace-keyword'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerReplaceKeyword\\Http\\Controllers',
    ],
];
