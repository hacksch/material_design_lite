<?php


$tempColumns = array(
    'tx_material_design_lite_grid_default' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_default',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array(
                    '',
                    0
                ),
            ),
        )
    ),
    'tx_material_design_lite_grid_desktop' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_desktop',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array(
                    '',
                    0
                ),
            ),
        )
    ),
    'tx_material_design_lite_grid_tablet' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_tablet',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array(
                    '',
                    0
                ),
            ),
        )
    ),
    'tx_material_design_lite_grid_phone' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_phone',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array(
                    '',
                    0
                ),
            ),
        )
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content',
    'tx_material_design_lite_grid_default, tx_material_design_lite_grid_desktop, tx_material_design_lite_grid_tablet, tx_material_design_lite_grid_phone');