<?php
defined('TYPO3_MODE') or die();

$TCA['tt_content']['types']['list']['subtypes_excludelist']['ve_guestbook_pi1'] = 'layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist']['ve_guestbook_pi1'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin([
    'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tt_content.list_type_pi1',
    $_EXTKEY . '_pi1'
]);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('ve_guestbook_pi1', 'FILE:EXT:ve_guestbook/Configuration/FlexForms/flexform_ds.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_veguestbook_entries');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_veguestbook_entries');

if (TYPO3_MODE == 'BE') {
    // Adds wizard icon to the content element wizard.
    $TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_veguestbook_pi1_wizicon'] = 
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'pi1/class.tx_veguestbook_pi1_wizicon.php';
}
