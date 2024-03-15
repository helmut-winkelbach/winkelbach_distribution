<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function() {
    /**
     * Extension key
     */
    $extensionKey = 'winkelbach_distribution';

    /**
     * Default TypoScript for WinkelbachDistribution
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Winkelbach-Distribution'
    );
});
