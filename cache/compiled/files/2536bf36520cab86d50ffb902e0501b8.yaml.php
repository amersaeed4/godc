<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/amer/Sites/godc/user/config/plugins/email.yaml',
    'modified' => 1793725598,
    'size' => 189,
    'data' => [
        'enabled' => true,
        'from' => 'info@godc.pk',
        'from_name' => 'GODC Website',
        'to' => 'info@godc.pk',
        'to_name' => 'GODC',
        'mailer' => [
            'engine' => 'sendmail',
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail -bs'
            ]
        ],
        'content_type' => 'text/html'
    ]
];
