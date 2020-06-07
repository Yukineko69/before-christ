<?php
return [
    'backend' => [
        'frontName' => 'admin'
    ],
    'crypt' => [
        'key' => 'cc4b971c7bc1fe717ba2e75a7d545ef9'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => 'Shiro159753',
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '6bc_'
            ],
            'page_cache' => [
                'id_prefix' => '6bc_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => ''
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'target_rule' => 1,
        'full_page' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'translate' => 1,
        'config_webservice' => 1,
        'compiled_config' => 1,
        'google_product' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        '127.0.0.1'
    ],
    'install' => [
        'date' => 'Sat, 06 Jun 2020 15:34:51 +0000'
    ]
];
