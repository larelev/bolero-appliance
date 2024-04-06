<?php

namespace App\Events;

use Bolero\Framework\Http\Event\ResponseEvent;
use Bolero\Framework\Http\Event\ResponseEventListenerInterface;

class ContentLengthListener implements ResponseEventListenerInterface
{
    public function __invoke(ResponseEvent $event): void
    {
        // TODO: Implement __invoke() method.
        $response = $event->getResponse();

        if (!array_key_exists('Content-Length', $response->getHeaders())) {
            $response->setHeaders('Content-Length', strlen($response->getContent()));
        }
    }
}
