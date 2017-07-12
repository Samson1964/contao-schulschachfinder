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
		$result = \Database::getInstance()->prepare("SELECT * FROM tl_schulschachfinder WHERE published = ? ORDER tstamp DESC")
		                                  ->execute(1);

		$contentArr = array();
		if($result->numRows)
		{
			while($result->next())
			{
				$contentArr[] = array
				(
				);
			}
		}
			
		$this->Template->headline = $this->headline;
		$this->Template->hl = $this->hl;
		$this->Template->liste = $contentArr;
		
	}

}
