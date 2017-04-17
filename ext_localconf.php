<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
	options.saveDocNew.tx_veguestbook_entries = 1
');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	# ***************************************************************************************
	# CONFIGURATION of RTE in table "tx_veguestbook_entries", field "entry"
	# ***************************************************************************************
RTE.config.tx_veguestbook_entries.entry {
    hidePStyleItems = H1, H4, H5, H6
    proc.exitHTMLparser_db = 1
    proc.exitHTMLparser_db {
        keepNonMatchedTags = 1
        tags.font.allowedAttribs = color
        tags.font.rmTagIfNoAttrib = 1
        tags.font.nesting = global
    }
}
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'pi1/class.tx_veguestbook_pi1.php', '_pi1', 'list_type', 0);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    $_EXTKEY,
    'setup',
    '
tt_content.shortcut.20.0.conf.tx_veguestbook_entries = < plugin.' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getCN($_EXTKEY) . '_pi1
tt_content.shortcut.20.0.conf.tx_veguestbook_entries.CMD = singleView
', 43);

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['list_type_Info']['ve_guestbook_pi1'][] =
    \Simonschaufi\VeGuestbook\CMSLayout::class . '->getExtensionSummary';
