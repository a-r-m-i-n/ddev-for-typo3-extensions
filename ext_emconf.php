<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Example Extension (for DDEV for TYPO3 extensions)',
    'description' => 'Your description goes here.',
    'version' => '0.1.0-dev',
    'state' => 'alpha',
    'author' => 'Armin Vieweg',
    'author_email' => 'armin@v.ieweg.de',
    'author_company' => 'v.ieweg Webentwicklung',
    'constraints' => [
        'depends' => [
            'php' => '8.0.0-8.1.99',
            'typo3' => '11.5.0-12.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => ['Vendor\\MyExt\\' => 'Classes']
    ],
];
