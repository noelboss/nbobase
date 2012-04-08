<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	// add typoscript as static records.
	// go to the backend >  list-view > sysfolder "Templates" > "Include TS" > "Includes"
	// and add the desired static files. basics * are required.

    $path = t3lib_extMgm::extPath($_EXTKEY).'Configuration/TypoScript/';
	$i = 0;

	// configuration
	addTS($path.'basics/config/', 'Basic Configuration – required', $i, t3lib_extMgm::extPath($_EXTKEY));

	// link templates
	addTS($path.'basics/library/Links/', 'basics.library.Links', $i, t3lib_extMgm::extPath($_EXTKEY));

	// nav object
	addTS($path.'basics/library/NavDefault/', 'basics.library.NavDefault', $i, t3lib_extMgm::extPath($_EXTKEY));

	// page object, header, templavoila
	addTS($path.'basics/page/', 'Page Object – required', $i, t3lib_extMgm::extPath($_EXTKEY));
	// languag setup
	addTS($path.'basics/languages/', 'Language Configuration', $i, t3lib_extMgm::extPath($_EXTKEY));

	// modifications of existing typoscript
	addTS($path.'modifications', 'modification', $i, t3lib_extMgm::extPath($_EXTKEY));

	// extension configuration
	addTS($path.'extensions', 'extension', $i, t3lib_extMgm::extPath($_EXTKEY));


	// integration templates from terrific
	addTS(t3lib_extMgm::extPath($_EXTKEY).'Resources/Private/Templates/modules/*/', 'module', $i, t3lib_extMgm::extPath($_EXTKEY));

	// integration templates from terrific
	addTS(t3lib_extMgm::extPath($_EXTKEY).'Resources/Private/Templates/layout/', 'layout', $i, t3lib_extMgm::extPath($_EXTKEY));

	// library – template objects
	addTS($path.'library', 'library', $i, t3lib_extMgm::extPath($_EXTKEY));


	// performance optimization
	addTS($path.'basics/performance/', 'Performance Settings – required', $i, t3lib_extMgm::extPath($_EXTKEY));


	// recursively add TS
	function addTS($path, $name, &$i, $strip){
		$_EXTKEY = 'nbobase';
		if(is_file($path.'/setup.txt') || is_file($path.'/constants.txt')) {
			$i++;
			t3lib_extMgm::addStaticFile($_EXTKEY, str_replace($strip, '', $path), $i.' - '.$name);
		}
		foreach (glob($path.'/*', GLOB_ONLYDIR) as $dir) {

			switch (basename($dir)) {
				case 'integration':
				case 'typo3':
				case 'TypoScript':
				    $label = $name;
					break;

				default:
					$label = $name.'.'.basename($dir);
					break;
			}
			addTS($dir, $label, $i, $strip);
		}
	}
?>