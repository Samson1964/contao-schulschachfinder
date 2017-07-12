<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   DeWIS
 * @author    Frank Hoppe
 * @license   GNU/LGPL
 * @copyright Frank Hoppe 2014
 */

namespace Samson\Schulschachfinder;

class Frontend extends \Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_schulschachfinder';
	
	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new \BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### SCHULSCHACHFINDER ###';
			$objTemplate->title = $this->name;
			$objTemplate->id = $this->id;

			return $objTemplate->parse();
		}

		return parent::generate(); // Weitermachen mit dem Modul
	}

	/**
	 * Generate the module
	 */
	protected function compile()
	{
		
		// Datensätze einlesen
		$result = \Database::getInstance()->prepare("SELECT * FROM tl_schulschachfinder WHERE published = ?")
		                                  ->execute(1);

		$contentArr = array();
		if($result->numRows)
		{
			while($result->next())
			{
				// Details zusammenbauen, wenn FE-User eingeloggt ist
				$details = '';
				if (!FE_USER_LOGGED_IN)
				{
					$details = '<a class="inline cboxElement" href="#hidden_content_finder_'.$result->id.'" title="Details zur Anzeige">Details</a>';
				}

				$contentArr[] = array
				(
					'item_id'         => $result->id,
					'wir'             => $result->wir,
					'suchen'          => $result->suchen,
					'ziel'            => $result->ziel,
					'anfrage'         => 'Wir sind '.$GLOBALS['schulschachfinder']['wir'][$result->wir].' und '.$GLOBALS['schulschachfinder']['suchen'][$result->suchen].', um '.$GLOBALS['schulschachfinder']['ziel'][$result->ziel],
					'plz'             => $result->plz,
					'ort'             => $result->ort,
					'ansprechpartner' => $result->ansprechpartner,
					'telefon'         => $result->telefon,
					'email'           => $result->email ? '{{email::'.$result->email.'}}' : '',
					'webseite'        => $result->webseite ? '<a href="'.$result->webseite.'" target="_blank">'.$result->webseite.'</a>' : '',
					'bemerkung'       => $result->bemerkung,
					'details' => $details
				);
			}
		}

		$this->Template->headline = $this->headline;
		$this->Template->hl = $this->hl;
		$this->Template->liste = $contentArr;
		$this->Template->view_details = 1; //FE_USER_LOGGED_IN;
		
	}

}
