<?php

declare(strict_types=1);

namespace Venoudev\WpPlugin\Services\ExampleService\Contracts;

defined('ABSPATH') || exit;

interface ExampleService
{
    public function sendOrder(): void;
}