<?php

/**
 * Tabelle tl_schulschachfinder
 */
$GLOBALS['TL_DCA']['tl_schulschachfinder'] = array
(

	// Konfiguration
	'config' => array
	(
		'dataContainer'               => 'Table',
		'enableVersioning'            => true,
		'sql' => array
		(
			'keys' => array
			(
				'id' => 'primary'
			)
		),
	),

	// Datensätze auflisten
	'list' => array
	(
		'sorting' => array
		(
			'mode'                    => 2,
			'fields'                  => array('plz','ort'),
			'flag'                    => 1,
			'panelLayout'             => 'filter;sort,search,limit',
		),
		'label' => array
		(
			// Das Feld aktiv wird vom label_callback überschrieben
			'fields'                  => array('plz','ort'),
			'showColumns'             => true,
			'format'                  => '%s'
		),
		'global_operations' => array
		(
			'all' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['MSC']['all'],
				'href'                => 'act=select',
				'class'               => 'header_edit_all',
				'attributes'          => 'onclick="Backend.getScrollOffset()" accesskey="e"'
			)
		),
		'operations' => array
		(
			'edit' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['edit'],
				'href'                => 'act=edit',
				'icon'                => 'edit.gif'
			),
			'copy' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['copy'],
				'href'                => 'act=copy',
				'icon'                => 'copy.gif',
			),
			'delete' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['delete'],
				'href'                => 'act=delete',
				'icon'                => 'delete.gif',
				'attributes'          => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
			),
			'show' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['show'],
				'href'                => 'act=show',
				'icon'                => 'show.gif',
				'attributes'          => 'style="margin-right:3px"'
			),
		)
	),

	// Paletten
	'palettes' => array
	(
		'default'                     => '{was_legend},wir,suchen,ziel;{ort_legend},plz,ort;{contact_legend},ansprechpartner,telefon,email,webseite,bemerkung;{publish_legend},published'
	),

	// Felder
	'fields' => array
	(
		'id' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['id'],
			'sorting'                 => true,
			'search'                  => true,
			'sql'                     => "int(10) unsigned NOT NULL auto_increment"
		),
		'tstamp' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['tstamp'],
			'sql'                     => "int(10) unsigned NOT NULL default '0'"
		),
		'wir' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['wir'],
			'inputType'               => 'select',
			'options'                 => array
			(
				1                  => 'eine Schule',
				2                  => 'eine Schachschule',
				3                  => 'ein Schachverein'
			),
			'exclude'                 => true,
			'search'                  => false,
			'filter'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>1, 'tl_class'=>'long'),
			'sql'                     => "int(1) unsigned NOT NULL default '0'"
		),
		'suchen' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['suchen'],
			'inputType'               => 'select',
			'options'                 => array
			(
				1                  => 'suchen eine Schule',
				2                  => 'suchen eine Schachschule',
				3                  => 'suchen einen Schachverein'
			),
			'exclude'                 => true,
			'search'                  => false,
			'filter'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>1, 'tl_class'=>'long'),
			'sql'                     => "int(1) unsigned NOT NULL default '0'"
		),
		'ziel' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['ziel'],
			'inputType'               => 'select',
			'options'                 => array
			(
				1                  => 'eine Schach-AG ins Leben zu rufen.',
				2                  => 'die Kinder aus unserer Schach-AG dorthin zu vermitteln.',
				3                  => 'eine generelle Zusammenarbeit anzustreben.'
			),
			'exclude'                 => true,
			'search'                  => false,
			'filter'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>1, 'tl_class'=>'long'),
			'sql'                     => "int(1) unsigned NOT NULL default '0'"
		),
		'plz' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['plz'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => true,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'ort' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['ort'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'filter'                  => true,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'ansprechpartner' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['ansprechpartner'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'telefon' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['telefon'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>64, 'tl_class'=>'w50 clr'),
			'sql'                     => "varchar(64) NOT NULL default ''"
		),
		'email' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['email'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'w50', 'rgxp'=>'email'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'webseite' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['webseite'],
			'inputType'               => 'text',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => false,
			'eval'                    => array('mandatory'=>false, 'maxlength'=>255, 'tl_class'=>'long clr', 'rgxp'=>'url'),
			'sql'                     => "varchar(255) NOT NULL default ''"
		),
		'bemerkung' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['bemerkung'],
			'inputType'               => 'textarea',
			'exclude'                 => true,
			'sorting'                 => true,
			'flag'                    => 1,
			'search'                  => true,
			'eval'                    => array('mandatory'=>false, 'tl_class'=>'long', 'rte'=>'tinyMCE'),
			'sql'                     => "text NULL"
		),
		'published' => array
		(
			'label'                   => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['published'],
			'exclude'                 => true,
			'filter'                  => true,
			'default'                 => true,
			'inputType'               => 'checkbox',
			'eval'                    => array('doNotCopy'=>true),
			'sql'                     => "char(1) NOT NULL default ''"
		),
	)
);

/**
 * Class tl_schulschachfinder
 */
class tl_schulschachfinder extends \Backend
{

}
