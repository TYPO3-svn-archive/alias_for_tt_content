<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_aliasforttcontent_alias' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:alias_for_tt_content/locallang_db.xml:tt_content.tx_aliasforttcontent_alias',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',	
			'eval' => 'unique',
		)
	),
);


t3lib_div::loadTCA('tt_content');
t3lib_extMgm::addTCAcolumns('tt_content',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('tt_content','tx_aliasforttcontent_alias;;;;1-1-1');
?>