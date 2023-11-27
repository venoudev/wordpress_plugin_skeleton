<?php

namespace Venoudev\WpPlugin\Config;

defined('ABSPATH') || exit;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

class ContainerConfig
{
    public static function containerConfig() : ContainerInterface
    {
        $containerBuilder = new ContainerBuilder();
        $containerConfigFile = ContainerMerge::mergeContainerServices();
        $containerBuilder->useAutowiring(true);
        $containerBuilder->addDefinitions($containerConfigFile);

        return $containerBuilder->build();
    }
}