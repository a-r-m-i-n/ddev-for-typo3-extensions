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
            'php' => '7.4.0-7.4.99',
            'typo3' => '9.5.0-10.99.99',
        ],
    ],
    'autoload' => [
        'psr-4' => ['Vendor\\MyExt\\' => 'Classes']
    ],
];
