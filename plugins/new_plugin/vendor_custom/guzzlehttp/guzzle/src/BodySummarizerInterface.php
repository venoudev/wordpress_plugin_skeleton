<?php
/**
 * @license MIT
 *
 * Modified by venoudev using Strauss.
 * @see https://github.com/BrianHenryIE/strauss
 */

namespace Venoudev\GuzzleHttp;

use Psr\Http\Message\MessageInterface;

interface BodySummarizerInterface
{
    /**
     * Returns a summarized message body.
     */
    public function summarize(MessageInterface $message): ?string;
}
