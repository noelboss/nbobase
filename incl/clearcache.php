<?php 
if (!defined ('TYPO3_MODE')) 	die ('Access denied.'); 

// Add Backend Menu Entry
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['additionalBackendItems']['cacheActions'][] = 'EXT:nxbase/Classes/Utility/ClearCache/menu.php:&tx_nxbaseclearcache_menu';

// Add ajax options
$TYPO3_CONF_VARS['BE']['AJAX']['tx_nxbaseclearcache::clear'] = 'EXT:nxbase/Classes/Utility/ClearCache/clear.php:tx_nxbaseclearcache->clear';

//$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['docHeaderButtonsHook'][] = 'EXT:nxbase/Classes/Utility/ClearCache/clear.php:tx_nxbase_clearcache->pageIcon';

?>