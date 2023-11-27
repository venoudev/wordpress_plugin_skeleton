<?php

declare(strict_types=1);

namespace VenouDev\WpPlugin\Services\ExampleService\Actions;

defined('ABSPATH') || exit;

class ExampleServiceAction
{
    public function __construct()
    {

    }

    public function __invoke(): string
    {
        return 'Hi';
    }

}