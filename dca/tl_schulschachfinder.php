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
			'fields'                  => array('plz','ort','ansprechpartner','telefon','email'),
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
			'toggle' => array
			(
				'label'               => &$GLOBALS['TL_LANG']['tl_schulschachfinder']['toggle'],
				'icon'                => 'visible.gif',
				'attributes'          => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
				'button_callback'     => array('tl_schulschachfinder', 'toggleIcon')
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

	/**
	 * Ändert das Aussehen des Toggle-Buttons.
	 * @param $row
	 * @param $href
	 * @param $label
	 * @param $title
	 * @param $icon
	 * @param $attributes
	 * @return string
	 */
	public function toggleIcon($row, $href, $label, $title, $icon, $attributes)
	{
		$this->import('BackendUser', 'User');
		
		if (strlen($this->Input->get('tid')))
		{
			$this->toggleVisibility($this->Input->get('tid'), ($this->Input->get('state') == 0));
			$this->redirect($this->getReferer());
		}
		
		// Check permissions AFTER checking the tid, so hacking attempts are logged
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_schulschachfinder::published', 'alexf'))
		{
			return '';
		}
		
		$href .= '&amp;id='.$this->Input->get('id').'&amp;tid='.$row['id'].'&amp;state='.$row[''];
		
		if (!$row['published'])
		{
			$icon = 'invisible.gif';
		}
		
		return '<a href="'.$this->addToUrl($href).'" title="'.specialchars($title).'"'.$attributes.'>'.$this->generateImage($icon, $label).'</a> ';
	}

	/**
	 * Toggle the visibility of an element
	 * @param integer
	 * @param boolean
	 */
	public function toggleVisibility($intId, $blnPublished)
	{
		// Check permissions to publish
		if (!$this->User->isAdmin && !$this->User->hasAccess('tl_schulschachfinder::published', 'alexf'))
		{
			$this->log('Not enough permissions to show/hide record ID "'.$intId.'"', 'tl_schulschachfinder toggleVisibility', TL_ERROR);
			$this->redirect('contao/main.php?act=error');
		}
		
		$this->createInitialVersion('tl_schulschachfinder', $intId);
		
		// Trigger the save_callback
		if (is_array($GLOBALS['TL_DCA']['tl_schulschachfinder']['fields']['published']['save_callback']))
		{
			foreach ($GLOBALS['TL_DCA']['tl_schulschachfinder']['fields']['published']['save_callback'] as $callback)
			{
				$this->import($callback[0]);
				$blnPublished = $this->$callback[0]->$callback[1]($blnPublished, $this);
			}
		}
		
		// Update the database
		$this->Database->prepare("UPDATE tl_schulschachfinder SET tstamp=". time() .", published='" . ($blnPublished ? '' : '1') . "' WHERE id=?")
		               ->execute($intId);
		$this->createNewVersion('tl_schulschachfinder', $intId);
	}

}
