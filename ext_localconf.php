<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['GLOBAL']['extTablesInclusion-PostProcessing'][] = 'EXT:material_design_lite/Classes/Hooks/TcaTemplavoila.php:Tx_MaterialDesignLite_Hooks_TcaTemplavoila'; 