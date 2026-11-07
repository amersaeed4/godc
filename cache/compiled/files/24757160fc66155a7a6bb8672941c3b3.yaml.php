<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/godc/system/config/security.yaml',
    'modified' => 1793680547,
    'size' => 11410,
    'data' => [
        'xss_whitelist' => [
            0 => 'admin.super'
        ],
        'xss_enabled' => [
            'on_events' => true,
            'invalid_protocols' => true,
            'moz_binding' => true,
            'html_inline_styles' => true,
            'dangerous_tags' => true
        ],
        'xss_invalid_protocols' => [
            0 => 'javascript',
            1 => 'livescript',
            2 => 'vbscript',
            3 => 'mocha',
            4 => 'feed',
            5 => 'data'
        ],
        'xss_dangerous_tags' => [
            0 => 'applet',
            1 => 'meta',
            2 => 'xml',
            3 => 'blink',
            4 => 'link',
            5 => 'style',
            6 => 'script',
            7 => 'embed',
            8 => 'object',
            9 => 'iframe',
            10 => 'frame',
            11 => 'frameset',
            12 => 'ilayer',
            13 => 'layer',
            14 => 'bgsound',
            15 => 'title',
            16 => 'base',
            17 => 'isindex',
            18 => 'svg',
            19 => 'math'
        ],
        'uploads_dangerous_extensions' => [
            0 => 'php',
            1 => 'php2',
            2 => 'php3',
            3 => 'php4',
            4 => 'php5',
            5 => 'phar',
            6 => 'phtml',
            7 => 'html',
            8 => 'htm',
            9 => 'shtml',
            10 => 'shtm',
            11 => 'js',
            12 => 'exe',
            13 => 'md',
            14 => 'yaml',
            15 => 'yml',
            16 => 'json',
            17 => 'twig',
            18 => 'ini',
            19 => 'xhtml',
            20 => 'xht',
            21 => 'xhtm',
            22 => 'svgz',
            23 => 'xml',
            24 => 'xsl',
            25 => 'xslt',
            26 => 'atom',
            27 => 'rss',
            28 => 'rdf',
            29 => 'mml',
            30 => 'php7',
            31 => 'php8',
            32 => 'pht',
            33 => 'phtm',
            34 => 'phps'
        ],
        'sanitize_svg' => true,
        'twig_content' => [
            'process_enabled' => true,
            'editor_enabled' => false,
            'config_access' => false
        ],
        'twig_sandbox' => [
            'enabled' => true,
            'allowed_tags' => [
                
            ],
            'allowed_filters' => [
                
            ],
            'allowed_functions' => [
                
            ],
            'allowed_methods' => [
                
            ],
            'allowed_properties' => [
                
            ],
            'denied_tags' => [
                
            ],
            'denied_filters' => [
                
            ],
            'denied_functions' => [
                
            ],
            'denied_methods' => [
                
            ],
            'denied_properties' => [
                
            ],
            'trusted_partials' => [
                
            ],
            'config_denied_paths' => [
                
            ]
        ],
        'read_file' => [
            'allowed_streams' => [
                0 => 'theme',
                1 => 'themes',
                2 => 'page'
            ],
            'allowed_extensions' => [
                0 => 'md',
                1 => 'markdown',
                2 => 'txt',
                3 => 'html',
                4 => 'htm',
                5 => 'css',
                6 => 'json',
                7 => 'csv',
                8 => 'xml',
                9 => 'svg'
            ],
            'max_size' => 1048576
        ],
        'media' => [
            'allowed_roots' => [
                0 => 'page://',
                1 => 'image://',
                2 => 'media://',
                3 => 'theme://',
                4 => 'themes://',
                5 => 'plugins://',
                6 => 'asset://',
                7 => 'system://images',
                8 => 'system://assets'
            ]
        ]
    ]
];
