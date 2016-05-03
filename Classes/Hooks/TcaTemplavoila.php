<?php

class Tx_MaterialDesignLite_Hooks_TcaTemplavoila implements \TYPO3\CMS\Core\Database\TableConfigurationPostProcessingHookInterface {

	/**
	 * Function which may process data created / registered by extTables
	 * scripts (f.e. modifying TCA data of all extensions)
	 *
	 * @return void
	 */
	public function processData() {

		if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('templavoila') === true) {
			\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
				'tt_content',
				'--palette--;LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:palette.responsive_layout;mdl_layout',
				'templavoila_pi1',
				'before:tx_templavoila_to'
			);
		}
	}
}
