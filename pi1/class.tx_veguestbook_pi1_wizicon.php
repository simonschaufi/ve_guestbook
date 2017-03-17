<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2004 Udo von Eynern (udo@voneynern.de)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use TYPO3\CMS\Core\Localization\Parser\LocallangXmlParser;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class that adds the wizard icon.
 *
 * @author    Udo von Eynern <udo@voneynern.de>
 */
class tx_veguestbook_pi1_wizicon
{
    /**
     * Adds the ve_guestbook pi1 wizard icon
     *
     * @param array $wizardItems Input array with wizard items for plugins
     * @return array Modified input array, having the item for tt_address pi1 added.
     */
    function proc($wizardItems)
    {
        global $LANG;

        $LL = $this->includeLocalLang();

        $wizardItems["plugins_tx_veguestbook_pi1"] = [
            'icon' => ExtensionManagementUtility::extRelPath("ve_guestbook") . 'pi1/ce_wiz.gif',
            'title' => $LANG->getLLL('pi1_title', $LL),
            'description' => $LANG->getLLL('pi1_plus_wiz_description', $LL),
            'params' => '&defVals[tt_content][CType]=list&defVals[tt_content][list_type]=ve_guestbook_pi1'
        ];

        return $wizardItems;
    }

    /**
     * Includes the locallang file for the 've_guestbook' extension
     *
     * @return array The LOCAL_LANG array
     */
    function includeLocalLang()
    {
        $llFile = ExtensionManagementUtility::extPath('ve_guestbook') . 'Resources/Private/Language/locallang_wizicon.xml';
        
        $localLanguageParser = GeneralUtility::makeInstance(LocallangXmlParser::class);
        return $localLanguageParser->getParsedData($llFile, $GLOBALS['LANG']->lang);
    }
}
