<?php
/**
 * Created by PhpStorm.
 * User: cziel
 * Date: 24.01.14
 * Time: 15:10
 */
\t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'FluidTYPO3 example extension');
\Tx_Flux_Core::registerProviderExtensionKey('t3ugnde', 'Page');
\Tx_Flux_Core::registerProviderExtensionKey('t3ugnde', 'Content');