<?php

declare(strict_types=1);

namespace Venoudev\WpPlugin\Config;

defined('ABSPATH') || exit;

use Dotenv\Dotenv;
use Exception;

class Config
{
    public static function init(): void
    {
        $dotenv = Dotenv::createMutable(__DIR__ . '/../');
        $dotenv->safeLoad();
    }

    /**
     * @throws Exception
     */
    public static function config(string $key = ''): mixed
    {

        $values = [
            'example_value' => $_ENV['EXAMPLE_VALUE']
        ];

        return array_key_exists($key, $values) ? $values[$key] : throw new Exception();
    }
}



