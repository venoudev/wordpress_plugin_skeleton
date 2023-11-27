<?php

declare(strict_types=1);

namespace Venoudev\WpPlugin\Config\bind;

defined('ABSPATH') || exit;

use function DI\autowire;

class ServicesBind
{
    public static function bindServices(): array
    {
        return array(
            \ExampleService::class => autowire(\ApiService::class)
        );
    }
}