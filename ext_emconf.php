<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Material Design Lite',
	'description' => 'Google Material Design Lite implementation for TYPO3',
	'category' => 'fe',
	'version' => '1.1.0',
	'priority' => 'bottom',
	'module' => '',
	'state' => 'stable',
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => false,
	'author' => 'Martin Tepper',
	'author_email' => 'martintepper@dev-mt.de',
	'author_company' => '',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(),
	),
);
