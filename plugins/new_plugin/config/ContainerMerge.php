<?php

declare(strict_types=1);

namespace Venoudev\WpPlugin\Config;

defined('ABSPATH') || exit;

use Venoudev\WpPlugin\Config\bind\ServicesBind;

class ContainerMerge
{
    public static function mergeContainerServices(): array
    {
        return array_merge(
            ServicesBind::bindServices(),
            // Other binds
        );
    }
}
