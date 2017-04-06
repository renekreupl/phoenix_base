<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}


/**
 * Default TsConfig
 */
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page.txt">'
);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
	'<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/User.txt">'
);


/**
 * Mark the delivered TypoScript templates as "content rendering template"
 * (providing the hooks of "static template 43" = content (default))
 */
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'phoenix_base/Configuration/TypoScript/';


/**
 * Use RealUrl Config from phoenix_base
 */
@include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY,'Configuration/RealURL/Default.php'));
