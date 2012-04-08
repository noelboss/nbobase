<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

foreach (glob(t3lib_extMgm::extPath($_EXTKEY).'Configuration/TCA/*.php') as $file) {
	if (is_file($file)) {
		require_once($file);
	}
}

?>