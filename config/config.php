<?php

$GLOBALS['schulschachfinder'] = array
(
	'wir' => array
	(
		1 => 'eine Schule',
		2 => 'eine Schachschule',
		3 => 'ein Schachverein'
	),
	'suchen' => array
	(
		1 => 'suchen eine Schule',
		2 => 'suchen eine Schachschule',
		3 => 'suchen einen Schachverein'
	),
	'ziel' => array
	(
		1 => 'eine Schach-AG ins Leben zu rufen.',
		2 => 'die Kinder aus unserer Schach-AG dorthin zu vermitteln.',
		3 => 'eine generelle Zusammenarbeit anzustreben.'
	),
);

/**
 * Backend-Bereich DSB anlegen, wenn noch nicht vorhanden
 */
if(!$GLOBALS['BE_MOD']['dsb']) 
{
	$dsb = array(
		'dsb' => array()
	);
	array_insert($GLOBALS['BE_MOD'], 0, $dsb);
}

$GLOBALS["BE_MOD"]["dsb"]["schulschachfinder"] = array
(
	"tables"      => array("tl_schulschachfinder"),
	"icon"        => "system/modules/schulschachfinder/assets/images/icon.png",
);

/**
 * Frontend-Module
 */
$GLOBALS['FE_MOD']['dsb']['schulschachfinder'] = 'Samson\Schulschachfinder\Frontend';


/**
 * Inserttag für Adressersetzung in den Hooks anmelden
 */

//$GLOBALS['TL_HOOKS']['processFormData'][] = array('Samson\Adressen\Adressen_Frontend','adresse_ersetzen');
