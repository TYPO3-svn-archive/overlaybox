<?php

########################################################################
# Extension Manager/Repository config file for ext "overlaybox".
#
# Auto generated 24-01-2013 13:38
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Overlay-Box',
	'description' => 'A Box for content to be layed over pages',
	'category' => 'plugin',
	'author' => 'Florian Mast',
	'author_email' => 'fm@cabag.ch',
	'author_company' => 'CAB AG',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '2.0.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3',
			'fluid' => '1.3',
			'typo3' => '4.5-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:29:{s:13:"ChangeLog.txt";s:4:"6518";s:21:"ExtensionBuilder.json";s:4:"9f5e";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"333f";s:14:"ext_tables.php";s:4:"889f";s:14:"ext_tables.sql";s:4:"aa08";s:14:"overlaybox.css";s:4:"2745";s:43:"Classes/Controller/OverlayboxController.php";s:4:"b542";s:35:"Classes/Domain/Model/Overlaybox.php";s:4:"d16a";s:50:"Classes/Domain/Repository/OverlayboxRepository.php";s:4:"561f";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"072c";s:38:"Configuration/FlexForms/Overlaybox.xml";s:4:"58be";s:32:"Configuration/TCA/Overlaybox.php";s:4:"e44e";s:38:"Configuration/TypoScript/constants.txt";s:4:"fc80";s:34:"Configuration/TypoScript/setup.txt";s:4:"8d59";s:40:"Resources/Private/Language/locallang.xml";s:4:"9242";s:82:"Resources/Private/Language/locallang_csh_tx_overlaybox_domain_model_overlaybox.xml";s:4:"70af";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"76fa";s:38:"Resources/Private/Layouts/Default.html";s:4:"e8cc";s:53:"Resources/Private/Partials/Overlaybox/Properties.html";s:4:"5814";s:48:"Resources/Private/Templates/Overlaybox/Show.html";s:4:"9066";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:64:"Resources/Public/Icons/tx_overlaybox_domain_model_overlaybox.gif";s:4:"905a";s:39:"Resources/Public/Js/jquery-1.7.1.min.js";s:4:"ddb8";s:47:"Resources/Public/Js/jquery.cookies.2.2.0.min.js";s:4:"1b61";s:33:"Resources/Public/Js/overlaybox.js";s:4:"87db";s:50:"Tests/Unit/Controller/OverlayboxControllerTest.php";s:4:"d342";s:42:"Tests/Unit/Domain/Model/OverlayboxTest.php";s:4:"6eb1";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>