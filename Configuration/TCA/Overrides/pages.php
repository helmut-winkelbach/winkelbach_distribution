<?php
defined('TYPO3') || die();

call_user_func(function() {
 
     $extensionKey = 'winkelbach_distribution';

    /**
     * Default PageTS for WinkelbachDistribution
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'Winkelbach Distribution'
    );
/**
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    $extensionKey,
    'Configuration/TsConfig/Timeline.tsconfig',
    'EXT:winkelbach_distribution :: Timeline'
    'Configuration/TsConfig/Accordion.tsconfig',
    'EXT:winkelbach_distribution :: Accordion'

);
**/
});
