<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'winkelbach_distribution';

    /**
     * Default PageTS for WinkelbachDistribution
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TsConfig/Page/All.tsconfig',
        'winkelbach-distribution'
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
