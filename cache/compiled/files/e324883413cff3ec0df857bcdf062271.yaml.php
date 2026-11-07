<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/godc/user/config/system.yaml',
    'modified' => 1793733901,
    'size' => 542,
    'data' => [
        'home' => [
            'alias' => '/home'
        ],
        'pages' => [
            'theme' => 'iham',
            'markdown' => [
                'extra' => true
            ],
            'types' => [
                0 => 'md',
                1 => 'markdown',
                2 => 'html',
                3 => 'xml',
                4 => 'txt'
            ]
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ]
        ],
        'assets' => [
            'css_pipeline' => false,
            'js_pipeline' => false,
            'enable_asset_timestamp' => false
        ],
        'errors' => [
            'display' => false,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'provider' => 'clockwork'
        ],
        'gpm' => [
            'releases' => 'stable',
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ],
        'twig' => [
            'autoescape' => true
        ],
        'timezone' => 'Asia/Karachi',
        'languages' => [
            'supported' => [
                
            ],
            'include_default_lang' => false
        ]
    ]
];
