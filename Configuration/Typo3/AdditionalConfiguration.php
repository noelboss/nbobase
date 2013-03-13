<?php        
	
	$GLOBALS['TYPO3_CONF_VARS']['DB'] = array(
		'database' => 't3_casaes',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'password' => '8cvb073!db',
		'username' => 't3_casaes',
	);

	
	$GLOBALS['TYPO3_CONF_VARS']['BE']['fileadminDir'] = 'assets/';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['staticFileEditPath'] = 'static/';
	//$GLOBALS['TYPO3_CONF_VARS']['BE']['compressionLevel'] = '4';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['lockRootPath'] = $_SERVER['DOCUMENT_ROOT'];
	$GLOBALS['TYPO3_CONF_VARS']['BE']['warning_email_addr'] =	$_SERVER['T3_WARNINGEMAILADDR'] ? $_SERVER['T3_WARNINGEMAILADDR'] : 'n.company@me.com';
	//$GLOBALS['TYPO3_CONF_VARS']['BE']['versionNumberInFilename'] = '1';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['allowDonateWindow'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['BE']['explicitADmode'] = '';
	

	$GLOBALS['TYPO3_CONF_VARS']['FE']['additionalAbsRefPrefixDirectories'] = 'assets/,';
	//$GLOBALS['TYPO3_CONF_VARS']['FE']['compressionLevel'] = '6';

	// Backend IP Restrictions and Warnings
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = $_SERVER['T3_DEVIPMASK'] ? $_SERVER['T3_DEVIPMASK'] : '127.0.0.1, 195.141.221.1, 192.168.0.*, 10.*'; // IP Mask for Backend
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['doNotCheckReferer'] = '1';
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['ddmmyy'] = 'd. m. Y';	 
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '2';
	
	$GLOBALS['TYPO3_CONF_VARS']['FE']['addRootLineFields'] = ',subtitle,description,keywords';
	$GLOBALS['TYPO3_CONF_VARS']['FE']['pageOverlayFields'] = 'uid,title,subtitle,nav_title,keywords,description,abstract,author,author_email,url,urltype,shortcut,shortcut_mode,tx_realurl_pathsegment';
	$GLOBALS['TYPO3_CONF_VARS']['FE']['hidePagesIfNotTranslatedByDefault'] = '1';
	

	$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0'; 
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '0';
	$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG'] = '0';
	
	if($_SERVER['ENVIRONMENT'] == 'local'){
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = '1';
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = '1';
		$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_DLOG'] = '1';

		$GLOBALS['TYPO3_CONF_VARS']['EXT']['allowLocalInstall'] = '1';

		$GLOBALS['TYPO3_CONF_VARS']['BE']['compressionLevel'] = '';
		$GLOBALS['TYPO3_CONF_VARS']['FE']['compressionLevel'] = '';
		
		$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_path'] = '/usr/local/bin/';
		$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_path_lzw'] = '/usr/local/bin/';
		$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_combine_filename'] = 'composite';
		$GLOBALS['TYPO3_CONF_VARS']['GFX']['im_version_5'] = 'im6';
	}
	
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['dce'] = 'a:2:{s:7:"DEVMODE";s:1:"1";s:16:"ENABLECODEMIRROR";s:1:"1";}';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['extension_builder'] = 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['cooluri'] = 'a:3:{s:6:"LANGID";s:1:"L";s:7:"XMLPATH";s:44:"typo3conf/ext/nbobase/Configuration/Cooluri/";s:11:"MULTIDOMAIN";s:1:"0";}';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['rsaauth'] = 'a:1:{s:18:"temporaryDirectory";s:18:"/home/mondialw/tmp";}';
	$GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';

?>
