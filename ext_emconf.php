<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ve_guestbook".
 *
 * Auto generated 04-09-2013 13:29
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Modern Guestbook',
    'description' => 'Guestbook extension',
    'author' => 'Simon Schaufelberger, Udo von Eynern',
    'author_email' => 'simonschaufi+veguestbook@gmail.com,udo@voneynern.de',
    'author_company' => 'Simon Schaufelberger, Udo von Eynern',
    'category' => 'plugin',
    'version' => '3.3.0',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'constraints' => [
        'depends' => [
            'typo3' => '7.6.0 - 7.9.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'sr_freecap' => '2.1.0'
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Simonschaufi\\VeGuestbook\\' => 'Classes',
        ],
    ],
);
