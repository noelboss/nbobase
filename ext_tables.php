<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// include Typo3 Configuration Array
require_once(t3lib_extMgm::extPath($_EXTKEY).'incl/tca.php');

// add default page TSconfig
require_once(t3lib_extMgm::extPath($_EXTKEY).'incl/tsconfig.php');

// Includes the TypoScrip
require_once(t3lib_extMgm::extPath($_EXTKEY).'incl/typoscript.php');

// Includes ClearCache Menu Entry
// require_once(t3lib_extMgm::extPath($_EXTKEY).'incl/clearcache.php');

?>