<?php

return [
    'default' => 'default',

    'documentations' => [
        'default' => [
            'api' => [
                'title' => 'Laravel API Documentation',
            ],

            'routes' => [
                /*
                 * Route for accessing API documentation interface
                 */
                'docs' => '/api/documentation',

                /*
                 * Route for accessing generated OpenAPI specification.
                 */
                'api' => '/api/docs',

                /*
                 * Middleware for the `api` route
                 */
                'middleware' => [
                    'api' => [],
                    'asset' => [],
                    'docs' => [],
                ],
            ],

            'paths' => [
                /*
                 * Edit to include the full URL in the generated docs
                 */
                'base' => env('L5_SWAGGER_BASE_PATH', null),

                /*
                 * Absolute path to the OpenAPI schema storage
                 */
                'docs' => storage_path('api-docs'),

                /*
                 * Absolute path to the generated JSON file
                 */
                'docs_json' => 'api-docs.json',

                /*
                 * Absolute path to the generated YAML file
                 */
                'docs_yaml' => 'api-docs.yaml',

                /*
                 * Directory containing the project's annotations
                 */
                'annotations' => [
                    base_path('app'),
                ],

                /*
                 * Absolute path to directory where to export views
                 */
                'views' => base_path('resources/views/vendor/l5-swagger'),
            ],

            'security' => [
                /*
                 * Define security schemes for the API.
                 * Example: JWT authentication
                 */
                'api_key' => [
                    'type' => 'apiKey',
                    'description' => 'JWT Authorization header using the Bearer scheme. Example: "Authorization: Bearer {token}"',
                    'name' => 'Authorization',
                    'in' => 'header',
                ],
            ],

            /*
             * Set this to `true` if you want the API documentation
             * to be re-generated on every request.
             * Useful for development, but should be `false` in production.
             */
            'generate_always' => env('L5_SWAGGER_GENERATE_ALWAYS', false),

            'generate_yaml_copy' => env('L5_SWAGGER_GENERATE_YAML_COPY', false),

            'swagger_version' => env('L5_SWAGGER_VERSION', '3.0'),

            /*
             * Paths to static files for Swagger UI
             */
            'proxy' => false,

            'additional_config_url' => null,

            'operations_sort' => env('L5_SWAGGER_OPERATIONS_SORT', null),

            'validator_url' => null,

            /*
             * UI display settings
             */
            'ui' => [
                'display' => [
                    'default_model_expand_depth' => 1,
                    'default_models_expand_depth' => -1,
                ],
            ],
        ],
    ],

    /*
     * Example for multiple documentation setups.
     */
    'documentations' => [
        'public' => [
            'api' => [
                'title' => 'Public API',
            ],

            'routes' => [
                'docs' => '/public/docs',
                'api' => '/public/docs.json',
            ],

            'paths' => [
                'docs' => storage_path('public-api-docs'),
                'annotations' => [
                    base_path('app/Http/Controllers/Public'),
                ],
            ],
        ],

        'private' => [
            'api' => [
                'title' => 'Private API',
            ],

            'routes' => [
                'docs' => '/private/docs',
                'api' => '/private/docs.json',
            ],

            'paths' => [
                'docs' => storage_path('private-api-docs'),
                'annotations' => [
                    base_path('app/Http/Controllers/Private'),
                ],
            ],
        ],
    ],

    /*
     * Settings for Swagger UI
     */
    'ui' => [
        'display' => [
            'default_model_expand_depth' => 1,
            'default_models_expand_depth' => -1,
        ],
    ],
];
