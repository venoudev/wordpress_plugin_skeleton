<?php

declare(strict_types=1);

namespace Venoudev\WpPlugin\Services\ExampleService;

defined('ABSPATH') || exit;

use Venoudev\WpPlugin\Services\ExampleService\Contracts\ExampleService;

class ApiService implements ExampleService
{

    public function sendOrder(): void
    {
        // TODO: Implement sendOrder() method.
    }
}