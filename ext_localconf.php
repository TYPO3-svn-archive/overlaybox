<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Overlayboxpi1',
	array(
		'Overlaybox' => 'show',
		
	),
	// non-cacheable actions
	array(
		'Overlaybox' => '',
		
	)
);

?>