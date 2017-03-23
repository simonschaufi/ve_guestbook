<?php

defined('TYPO3_MODE') or die();

return [
    'ctrl' => [
        'title' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries',
        'label' => 'entry',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate DESC',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'iconfile' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('ve_guestbook') . 'Resources/Public/Icons/icon_tx_veguestbook_entries.gif',
        'searchFields' => 'firstname,surname,email,homepage,place,entry,entrycomment,remote_addr'
    ],
    'interface' => [
        'showRecordFieldList' => 'hidden,sys_language_uid,firstname,surname,email,homepage,place,entry,entrycomment,remote_addr'
    ],
    'columns' => [
        'hidden' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'default' => '0'
            ]
        ],
        'sys_language_uid' => [
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => [
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1],
                    ['LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0]
                ]
            ]
        ],
        'crdate' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.crdate',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'tstamp' => [
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.tstamp',
            'config' => [
                'type' => 'input',
                'size' => '10',
                'max' => '20',
                'eval' => 'datetime',
                'checkbox' => '0',
                'default' => '0'
            ]
        ],
        'firstname' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.firstname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '25',
                'eval' => 'trim',
            ]
        ],
        'surname' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.surname',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'email' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.email',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
                'wizards' => [
                    '_PADDING' => 2,
                    'link' => [
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'link_popup.gif',
                        'module' => [
                            'name' => 'wizard_element_browser',
                            'urlParameters' => [
                                'mode' => 'wizard',
                                'act' => 'mail'
                            ]
                        ],
                        'params' => [
                            'blindLinkOptions' => 'url,file,spec,folder,page',
                        ],
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    ],
                ],
            ]
        ],
        'homepage' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.homepage',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '2083',
                'wizards' => [
                    '_PADDING' => 2,
                    'link' => [
                        'type' => 'popup',
                        'title' => 'LLL:EXT:cms/locallang_ttc.xlf:header_link_formlabel',
                        'icon' => 'link_popup.gif',
                        'module' => [
                            'name' => 'wizard_element_browser',
                            'urlParameters' => [
                                'mode' => 'wizard',
                                'act' => 'url'
                            ]
                        ],
                        'params' => [
                            'blindLinkOptions' => 'mail,file,spec,folder,page',
                        ],
                        'JSopenParams' => 'height=300,width=500,status=0,menubar=0,scrollbars=1'
                    ],
                ],
                'eval' => 'trim',
            ]
        ],
        'place' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.place',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
            ]
        ],
        'entry' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.entry',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'entrycomment' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.entrycomment',
            'config' => [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'remote_addr' => [
            'exclude' => 0,
            'label' => 'LLL:EXT:ve_guestbook/Resources/Private/Language/locallang_db.xml:tx_veguestbook_entries.remote_addr',
            'config' => [
                'type' => 'input',
                'size' => '30',
                'max' => '50',
                'eval' => 'trim',
            ]
        ],
    ],
    'types' => [
        '0' => ['showitem' => 'hidden;;1;;1-1-1, sys_language_uid, crdate, tstamp, firstname, surname, email, homepage, place, entry, entrycomment, remote_addr;']
    ],
    'palettes' => [
        '1' => ['showitem' => '']
    ]
];
