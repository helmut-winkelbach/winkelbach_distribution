<?php

/**
 * Extension Manager/Repository config file for ext "winkelbach_distribution".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'winkelbach-distribution',
    'description' => 'Sitepackage',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '10.2.0-10.4.99',
            'fluid_styled_content' => '10.2.0-10.4.99',
            'rte_ckeditor' => '10.2.0-10.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'WinkelbachWebdesign\\WinkelbachDistribution\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Helmut Winkelbach',
    'author_email' => 'helmut@winkelbach-web.de',
    'author_company' => 'Winkelbach WebDesign',
    'version' => '1.0.0',
];
