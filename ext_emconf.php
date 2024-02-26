<?php

/**
 * Extension Manager/Repository config file for ext "winkelbach_distribution".
 */
$EM_CONF[$_EXTKEY] = array (
  'title' => 'winkelbach-distribution',
  'description' => 'Sitepackage',
  'category' => 'templates',
  'state' => 'stable',
  'author' => 'Helmut Winkelbach',
  'author_email' => 'helmut@winkelbach-web.de',
  'author_company' => '',
  'version' => '3.0.0',
  'constraints' => [
   'depends' => [
    'typo3' => '11.5.0-12.4.99',
    'rte_ckeditor' => '11.5.0-12.4.99',
    'fluid_styled_content' => '11.5.0-12.4.99',
   ],
   'conflicts' => [ ],
  ],
);
