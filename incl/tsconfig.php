<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

// Add default page TSconfig
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nxbase/Configuration/TSconfig/page/default/be-editing.txt">');
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nxbase/Configuration/TSconfig/page/default/language.txt">');
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nxbase/Configuration/TSconfig/page/default/permissions.txt">');
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:nxbase/Configuration/TSconfig/page/default/rte.txt">');

?>