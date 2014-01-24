<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FluidTYPO3 example extension');
Tx_Flux_Core::registerProviderExtensionKey('t3ugnde', 'Page');
Tx_Flux_Core::registerProviderExtensionKey('t3ugnde', 'Content');