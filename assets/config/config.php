<?php

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

$GLOBALS["BE_MOD"]["dsb"]["schulschachfinder"] = array(
	"tables"      => array("tl_schulschachfinder"),
	"icon"        => "system/modules/schulschachfinder/assets/images/icon.png",
);

/**
 * Frontend-Module
 */
//$GLOBALS['FE_MOD']['schulschachfinder'] = array
//(
//	'wertungsreferenten' => 'Samson\Adressen\Wertungsreferenten',
//	'adressensuche'      => 'Samson\Adressen\Suche',
//);  


/**
 * Inserttag für Adressersetzung in den Hooks anmelden
 */

//$GLOBALS['TL_HOOKS']['processFormData'][] = array('Samson\Adressen\Adressen_Frontend','adresse_ersetzen');
