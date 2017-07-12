<?php

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'Samson',
));

/**
 * Klassen registrieren
 */

ClassLoader::addClasses(array
(
	'Samson\Schulschachfinder\Frontend' => 'system/modules/schulschachfinder/classes/Frontend.php'
));

/**
 * Templates registrieren
 */
TemplateLoader::addFiles(array
(
	'mod_schulschachfinder'             => 'system/modules/schulschachfinder/templates'
));
