<?php

declare(strict_types=1);

namespace VenouDev\WpPlugin\Actions;

defined('ABSPATH') || exit;

class ExampleAction
{
    public function __construct()
    {

    }

    public function __invoke(): string
    {
        return 'Hi';
    }

}