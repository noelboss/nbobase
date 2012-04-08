<?php
	// Pages:               
	// make start and endtime respect hours and minuts
	$GLOBALS['TCA']['pages']['columns']['starttime']['config']['eval'] ='datetime';
	$GLOBALS['TCA']['pages']['columns']['endtime']['config']['eval'] = 'datetime';     
	 
	// Render the General Record Storage Page selector as a tree of page
	t3lib_div::loadTCA('pages');
	$tempConfiguration = array(
		'type' => 'select',
		'foreign_table' => 'pages',
		'size' => 10,
		'renderMode' => 'tree',
		'treeConfig' => array(
			'expandAll' => true,
			'parentField' => 'pid',
			'appearance' => array(
				'showHeader' => TRUE,
			),
		),
	);
	$TCA['pages']['columns']['storage_pid']['config'] = array_merge(
		$TCA['pages']['columns']['storage_pid']['config'], $tempConfiguration
	);
?>