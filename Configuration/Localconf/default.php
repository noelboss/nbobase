<?php        

	/* INSTRUCTIONS on how to use:
	// Put the following lines in to the localconf.php
	// localconf.php should only contain the extlists, all other settings are pasted to this file
	// to allow releases
	
	$TYPO3_CONF_VARS['SYS']['encryptionKey'] = '…';	
	$TYPO3_CONF_VARS['BE']['installToolPassword'] = '…';

	$typo_db_username = 't3_instance';
	$typo_db_password = 'password';
	$typo_db_host = 'localhost';
	$typo_db = 't3_instance';

	// include this script
	require_once(PATH_typo3conf.'ext/nbobase/Configuration/Localconf/default.php');

	## INSTALL SCRIPT EDIT POINT TOKEN - all lines after this points may be changed by the install script!
	// $TYPO3_CONF_VARS['EXT']['extList'] …
	// $TYPO3_CONF_VARS['EXT']['extList_FE'] …
	*/
	
	
	// Base settings
	$TYPO3_CONF_VARS['SYS']['sitename'] = 'bissFEST';

	$TYPO3_CONF_VARS['SYS']['compat_version'] = '4.7';	
	$TYPO3_CONF_VARS['INSTALL']['wizardDone']['tx_coreupdates_installsysexts'] = '1';	//  Modified or inserted by TYPO3 Upgrade Wizard.
	$TYPO3_CONF_VARS['INSTALL']['wizardDone']['tx_coreupdates_installnewsysexts'] = '1';	//  Modified or inserted by TYPO3 Upgrade Wizard.
	
	// Needed to create Filemounts outside assets (for nmydummy resources mount)
	$TYPO3_CONF_VARS['BE']['lockRootPath'] = $_SERVER['DOCUMENT_ROOT'];

	// Force UTF-8 on System                
	$TYPO3_CONF_VARS['SYS']['UTF8filesystem'] = '1';	  
	$TYPO3_CONF_VARS['SYS']['setDBinit'] = 'SET NAMES utf8;\' . LF . \'SET CHARACTER_SET utf8;\' . LF . \'SET SESSION character_set_server=utf8;';	
	$TYPO3_CONF_VARS['BE']['forceCharset'] = 'utf-8';
		
	// DB Settings
	// see typo3conf/localconf.php

	// Image settings
	$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'gm';
	$TYPO3_CONF_VARS['GFX']['gdlib_png'] = '1'; 
	$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'combine'; 
	$TYPO3_CONF_VARS['GFX']['im_path'] = '/usr/local/bin/'; 
	$TYPO3_CONF_VARS['GFX']['im_path_lzw'] = '/usr/local/bin/';
	$TYPO3_CONF_VARS['GFX']['thumbnails'] = '1';
	$TYPO3_CONF_VARS['EXT']['allowLocalInstall'] = '0';
	
	
	// Backend IP Restrictions and Warnings
	$TYPO3_CONF_VARS['SYS']['devIPmask'] = $_SERVER['T3_DEVIPMASK'] ? $_SERVER['T3_DEVIPMASK'] : '127.0.0.1, 195.141.221.1, 192.168.0.*, 10.*'; // IP Mask for Backend
	//$TYPO3_CONF_VARS['BE']['IPmaskList'] =	$_SERVER['T3_IPMASKLIST'] ? $_SERVER['T3_IPMASKLIST'] : '127.0.0.1, 195.141.221.1, 192.168.0.*, 10.*, 172.29.2.*'; // IP Mask for Backend
	$TYPO3_CONF_VARS['BE']['warning_email_addr'] =	$_SERVER['T3_WARNINGEMAILADDR'] ? $_SERVER['T3_WARNINGEMAILADDR'] : 'n.company@me.com';
	
	// Display errors only if client matches [SYS][devIPmask]. 
	// If devIPmask matches the users IP address the configured "debugExceptionHandler" is 
	// used for exceptions, if not "productionExceptionHandler" will be used
	
	$TYPO3_CONF_VARS['BE']['compressionLevel'] = '4';
	$TYPO3_CONF_VARS['FE']['compressionLevel'] = '6';
	$TYPO3_CONF_VARS['BE']['loginSecurityLevel'] = 'normal';
	

	$TYPO3_CONF_VARS['SYS']['displayErrors'] = '0'; 
	$TYPO3_CONF_VARS['SYS']['systemLog'] = '0';
	$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = '';
	$TYPO3_CONF_VARS['SYS']['enable_DLOG'] = '0';

	if($_SERVER['ENVIRONMENT'] == 'local'){
		$TYPO3_CONF_VARS['SYS']['displayErrors'] = '2'; 
		$TYPO3_CONF_VARS['SYS']['systemLog'] = '1';
		$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = 'file';
		$TYPO3_CONF_VARS['SYS']['enable_DLOG'] = '1';

		$TYPO3_CONF_VARS['EXT']['allowLocalInstall'] = '1';

		$TYPO3_CONF_VARS['GFX']['im_path'] = '/usr/local/bin/';	
		$TYPO3_CONF_VARS['GFX']['im_path_lzw'] = '/usr/local/bin/';
		$TYPO3_CONF_VARS['GFX']['im_combine_filename'] = 'composite';
		$TYPO3_CONF_VARS['GFX']['im_version_5'] = 'im6';

		$TYPO3_CONF_VARS['BE']['compressionLevel'] = '';
		$TYPO3_CONF_VARS['FE']['compressionLevel'] = '';
	}
	
	// New Fileadmin
	$TYPO3_CONF_VARS['BE']['fileadminDir'] = 'assets/';
	$TYPO3_CONF_VARS['BE']['staticFileEditPath'] = 'assets/static/';
	$TYPO3_CONF_VARS['FE']['additionalAbsRefPrefixDirectories'] = 'assets/,';

	// Performance
	$TYPO3_CONF_VARS['SYS']['no_pconnect'] = '1';

	// Compression Levels
	// for Backend compression, make sure to enable uncomment the coresponting lines in the typo3-core .htaccess file
	// elsewhise, the backend will fly you around the ears! (yes, I speak wallstreet english)
	//$TYPO3_CONF_VARS['FE']['hidePagesIfNotTranslatedByDefault'] = '1';
	
	// Firefox doesn't work: 
	$TYPO3_CONF_VARS['SYS']['doNotCheckReferer'] = '1';
	
	// Security
	$TYPO3_CONF_VARS['BE']['disable_exec_function'] = '1'; 
	$TYPO3_CONF_VARS['BE']['usePHPFileFunctions'] = '1';
	$TYPO3_CONF_VARS['BE']['noPHPscriptInclude'] = '1';
	$TYPO3_CONF_VARS['SYS']['cookieHttpOnly'] = '1';
	$TYPO3_CONF_VARS['SYS']['cookieSecure'] = '2';	
	$TYPO3_CONF_VARS['BE']['explicitADmode'] = 'explicitDeny';

	// Date Settings
	$TYPO3_CONF_VARS['SYS']['ddmmyy'] = 'd. m. Y';	 

	// Disable Backend Donate Window
	$TYPO3_CONF_VARS['BE']['allowDonateWindow'] = '0';
	//$TYPO3_CONF_VARS['BE']['interfaces'] = 'backend,frontend';
	$TYPO3_CONF_VARS['BE']['interfaces'] = 'backend';
	// Modyfie Backend layout to display checkboxes in Access-Lists (BE-Usergroup Config)
	// $TYPO3_CONF_VARS['BE']['accessListRenderMode'] = 'checkbox';
	
	//$TYPO3_CONF_VARS['BE']['fileDenyPattern'] = '\\.(php[3-6]?|phpsh|phtml)(\\..*)?$|^\\.htaccess$';
	$TYPO3_CONF_VARS['BE']['versionNumberInFilename'] = '0';

	// addRootLineFields
	//$TYPO3_CONF_VARS['FE']['addRootLineFields'] = ',subtitle,tx_templavoila_ds,tx_templavoila_to,tx_templavoila_next_ds,tx_templavoila_next_to,tx_realurl_pathsegment,tx_realurl_exclude,tx_realurl_pathoverride,description,keywords';
	//$TYPO3_CONF_VARS['FE']['pageOverlayFields'] = 'uid,title,subtitle,nav_title,keywords,description,abstract,author,author_email,url,urltype,shortcut,shortcut_mode,tx_realurl_pathsegment';

	// Extension Settings
	$TYPO3_CONF_VARS['EXT']['extConf']['em'] = 'a:1:{s:17:"selectedLanguages";s:2:"de";}';	//  Modified or inserted by TYPO3 Extension Manager.
	$TYPO3_CONF_VARS['EXT']['extConf']['dce'] = 'a:2:{s:7:"DEVMODE";s:1:"1";s:16:"ENABLECODEMIRROR";s:1:"1";}';	// Modified or inserted by TYPO3 Extension Manager. 
	$TYPO3_CONF_VARS['EXT']['extConf']['extension_builder'] = 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}';	//  Modified or inserted by TYPO3 Extension Manager.
	$TYPO3_CONF_VARS['EXT']['extConf']['cooluri'] = 'a:3:{s:6:"LANGID";s:1:"L";s:7:"XMLPATH";s:44:"typo3conf/ext/nbobase/Configuration/Cooluri/";s:11:"MULTIDOMAIN";s:1:"0";}';	//  Modified or inserted by TYPO3 Extension Manager.
	$TYPO3_CONF_VARS['EXT']['extConf']['rsaauth'] = 'a:1:{s:18:"temporaryDirectory";s:18:"/home/mondialw/tmp";}';	// Modified or inserted by TYPO3 Extension Manager. 
	$TYPO3_CONF_VARS['EXT']['extConf']['saltedpasswords'] = 'a:2:{s:3:"FE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}s:3:"BE.";a:2:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";}}';	//  Modified or inserted by TYPO3 Extension Manager.	
?>
