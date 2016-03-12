<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "l10nmgr".
 *
 * Auto generated 10-03-2015 18:54
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Localization Manager',
    'description' => 'Module for managing localization import and export',
    'category' => 'module',
	'shy' => 0,
    'version' => '5.0.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'translate,export,import,cm1,cm2,cm3,mod1,mod2',
    'state' => 'beta',
    'uploadfolder' => false,
    'createDirs' => 'uploads/tx_l10nmgr/settings,uploads/tx_l10nmgr/saved_files,uploads/tx_l10nmgr/jobs,uploads/tx_l10nmgr/jobs/out,uploads/tx_l10nmgr/jobs/in,uploads/tx_l10nmgr/jobs/done,uploads/tx_l10nmgr/jobs/_cmd',
	'modify_tables' => '',
    'clearcacheonload' => true,
	'lockType' => '',
    'author' => 'Kasper Skaarhoej, Daniel Zielinski, Daniel Poetzinger, Fabian Seltmann, Andreas Otto, Jo Hasenau, Peter Russ',
    'author_email' => 'kasperYYYY@typo3.com, info@loctimize.com, info@cybercraft.de, pruss@uon.li',
    'author_company' => 'Localization Manager Team',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
    'constraints' =>
        array(
            'depends' =>
                array(
                    'php' => '5.5.0-0.0.0',
                    'typo3' => '6.2.0-6.2.99',
                ),
            'conflicts' =>
                array(),
            'suggests' =>
                array(),
        ),
	'_md5_values_when_last_written' => '',
	'suggests' => array()
);

