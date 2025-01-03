<?php
   defined('TYPO3') or die('Access denied.');
   
   
   use Crayon\T3element\Routing\Enhancer\T3Enhancer;

   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:t3element/Configuration/TsConfig/Page/All.tsconfig">');

   $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
   
	$iconRegistry->registerIcon('t3element',\TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider::class,['source' => 'EXT:t3element/Resources/Public/Icons/ic.png']);
   
   $GLOBALS['TYPO3_CONF_VARS']['SYS']['routing']['enhancers']['T3Enhancer'] = T3Enhancer::class;