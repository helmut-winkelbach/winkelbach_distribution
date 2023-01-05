<?php

/**
 * Extension Manager/Repository config file for ext "winkelbach_distribution".
 */
$EM_CONF[$_EXTKEY] = array (
  'title' => 'winkelbach-distribution',
  'description' => 'Sitepackage',
  'category' => 'templates',
  'state' => 'stable',
  'clearcacheonload' => 1,
  'author' => 'Helmut Winkelbach',
  'author_email' => 'helmut@winkelbach-web.de',
  'author_company' => '',
  'version' => '1.4.0',
  'constraints' => [
  array (
  'depends' => [
    'typo3' => '10.4.0-11.5.99',
    'rte_ckeditor' => '10.4.0-11.5.99',
    'fluid_styled_content' => '10.4.0-11.5.99',
   ],
  'conflicts' => 
  array (
  ),
  'suggests' => 
  array (
  ),
  ),
  ],
  'autoload' =>, 
  'uploadfolder' => false,
  'clearcacheonload' => true,
);
