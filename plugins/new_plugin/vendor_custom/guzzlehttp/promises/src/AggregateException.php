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
 * Exception thrown when too many errors occur in the some() or any() methods.
 */
class AggregateException extends RejectionException
{
    public function __construct(string $msg, array $reasons)
    {
        parent::__construct(
            $reasons,
            sprintf('%s; %d rejected promises', $msg, count($reasons))
        );
    }
}
