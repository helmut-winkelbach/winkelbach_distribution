<?php declare(strict_types=1);

/*
 * This file is part of the package bk2k/bootstrap-package.
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace WinkelbachWebdesign\WinkelbachDistribution\Userfuncs;

use TYPO3\CMS\Backend\Utility\BackendUtility;

class Tca
{
    public function timelineItemLabel(array &$parameters): void
    {
        if (!isset($parameters['table'])
            || $parameters['table'] !== 'tx_bootstrappackage_timeline_item'
            || !isset($parameters['row']['uid'])) {
            return;
        }

        $record = BackendUtility::getRecord($parameters['table'], $parameters['row']['uid']) ?? [];
        $parameters['title'] = ($record['date'] ?? '') . ' - ' . ($record['header'] ?? '');
    }
}

