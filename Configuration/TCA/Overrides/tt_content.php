<?php


$tempColumns = array(
    'tx_material_design_lite_grid_default' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_default',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('1', 1),
                array('2', 2),
                array('3', 3),
                array('4', 4),
                array('5', 5),
                array('6', 6),
                array('7', 7),
                array('8', 8),
                array('9', 9),
                array('10', 10),
                array('11', 11),
                array('12', 12),
            ),
            'default' => '8',
        )
    ),
    'tx_material_design_lite_grid_desktop' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_desktop',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('', 0),
                array('1', 1),
                array('2', 2),
                array('3', 3),
                array('4', 4),
                array('5', 5),
                array('6', 6),
                array('7', 7),
                array('8', 8),
                array('9', 9),
                array('10', 10),
                array('11', 11),
                array('12', 12),
            ),
            'default' => '0',
        )
    ),
    'tx_material_design_lite_grid_tablet' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_tablet',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('', 0),
                array('1', 1),
                array('2', 2),
                array('3', 3),
                array('4', 4),
                array('5', 5),
                array('6', 6),
                array('7', 7),
                array('8', 8),
                array('9', 9),
                array('10', 10),
                array('11', 11),
                array('12', 12),
            ),
            'default' => '0',
        )
    ),
    'tx_material_design_lite_grid_phone' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_grid_phone',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('', 0),
                array('1', 1),
                array('2', 2),
                array('3', 3),
                array('4', 4),
                array('5', 5),
                array('6', 6),
                array('7', 7),
                array('8', 8),
                array('9', 9),
                array('10', 10),
                array('11', 11),
                array('12', 12),
            ),
            'default' => '0',
        )
    ),
    'tx_material_design_lite_card_shadow' => array(
        'exclude' => 1,
        'label' => 'LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:tt_content.tx_material_design_lite_card_shadow',
        'config' => array(
            'type' => 'select',
            'items' => array(
                array('', 0),
                array('2', 2),
                array('3', 3),
                array('4', 4),
                array('6', 6),
                array('8', 8),
                array('16', 16),
            ),
            'default' => '4',
        )
    ),
);

    // add new palette
$GLOBALS['TCA']['tt_content']['palettes']['mdl_layout'] = array(
    'showitem' => 'tx_material_design_lite_grid_default, tx_material_design_lite_grid_desktop, tx_material_design_lite_grid_tablet, tx_material_design_lite_grid_phone',
    'canNotCollapse' => 1
);

    // add fields and palette
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tempColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addFieldsToPalette(
    'tt_content',
    'frames',
    'tx_material_design_lite_card_shadow',
    'after:section_frame'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    '--palette--;LLL:EXT:material_design_lite/Resources/Private/Language/locallang_db.xml:palette.responsive_layout;mdl_layout',
    '',
    'after:section_frame'
);