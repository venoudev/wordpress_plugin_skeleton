<?php

declare(strict_types=1);

namespace VenouDev\WpPlugin\Dto;

class ExampleDTO
{
    public string $exampleMessage;
    public function __construct(string $exampleMessage)
    {
        $this->exampleMessage = $exampleMessage;
    }
}