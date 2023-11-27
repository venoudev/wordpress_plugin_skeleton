<?php
/**
 * @license MIT
 *
 * Modified by venoudev using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

declare(strict_types=1);

namespace Venoudev\GuzzleHttp\Promise;

/**
 * Interface used with classes that return a promise.
 */
interface PromisorInterface
{
    /**
     * Returns a promise.
     */
    public function promise(): PromiseInterface;
}
