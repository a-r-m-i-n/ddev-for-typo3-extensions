<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
                'dbname' => 'db',
                'host' => 'db',
                'port' => 3306,
                'password' => 'db',
                'user' => 'db',
            ],
        ],
    ],
    'BE' => [
        'debug' => true,
    ],
    'FE' => [
        'debug' => true,
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'trustedHostsPattern' => '.*.*',
    ],
    'MAIL' => [
        'transport' => 'smtp',
        'transport_smtp_server' => 'localhost:1025',
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
]);
