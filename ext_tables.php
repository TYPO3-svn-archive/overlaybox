<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Overlayboxpi1',
	'Overlay Box Plugin 1'
);


// Include flex forms
$pluginName='overlayboxpi1'; // siehe Tx_Extbase_Utility_Extension::registerPlugin
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_'.$pluginName;
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' .
              $_EXTKEY . '/Configuration/FlexForms/Overlaybox.xml');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Overlay-Box');

			t3lib_extMgm::addLLrefForTCAdescr('tx_overlaybox_domain_model_overlaybox', 'EXT:overlaybox/Resources/Private/Language/locallang_csh_tx_overlaybox_domain_model_overlaybox.xml');
			t3lib_extMgm::allowTableOnStandardPages('tx_overlaybox_domain_model_overlaybox');
			$TCA['tx_overlaybox_domain_model_overlaybox'] = array(
				'ctrl' => array(
					'title'	=> 'LLL:EXT:overlaybox/Resources/Private/Language/locallang_db.xml:tx_overlaybox_domain_model_overlaybox',
					'label' => 'uid',
					'tstamp' => 'tstamp',
					'crdate' => 'crdate',
					'cruser_id' => 'cruser_id',
					'dividers2tabs' => TRUE,
					'versioningWS' => 2,
					'versioning_followPages' => TRUE,
					'origUid' => 't3_origuid',
					'languageField' => 'sys_language_uid',
					'transOrigPointerField' => 'l10n_parent',
					'transOrigDiffSourceField' => 'l10n_diffsource',
					'delete' => 'deleted',
					'enablecolumns' => array(
						'disabled' => 'hidden',
						'starttime' => 'starttime',
						'endtime' => 'endtime',
					),
					'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Overlaybox.php',
					'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_overlaybox_domain_model_overlaybox.gif'
				),
			);

?>