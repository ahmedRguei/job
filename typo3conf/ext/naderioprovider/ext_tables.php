<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'My first provider extension');

$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:fluidpages/Resources/Private/Language/locallang.xlf'][] = 'EXT:naderioprovider/Resources/Private/Language/locallang.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['fr']['EXT:fluidpages/Resources/Private/Language/locallang.xlf'][] = 'EXT:naderioprovider/Resources/Private/Language/fr.locallang.xlf';