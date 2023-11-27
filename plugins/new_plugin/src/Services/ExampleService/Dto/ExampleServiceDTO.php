<?php

declare(strict_types=1);

namespace VenouDev\WpPlugin\Services\ExampleService\Dto;

defined('ABSPATH') || exit;

class ExampleServiceDTO
{
    public string $exampleMessage;
    public function __construct(string $exampleMessage)
    {
        $this->exampleMessage = $exampleMessage;
    }
}