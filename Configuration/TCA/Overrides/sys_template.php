<?php
defined('TYPO3') || die();

call_user_func(function() {

    $extensionKey = 'winkelbach_distribution';

    /**
     * Default TypoScript for WinkelbachDistribution
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Winkelbach Distribution'
    );
});
