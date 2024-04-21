<?php

namespace App\Events;

use Bolero\Framework\Http\Event\ResponseEvent;
use Bolero\Framework\Http\Event\ResponseEventListenerInterface;

class InternalErrorListener implements ResponseEventListenerInterface
{

    public function __invoke(ResponseEvent $event): void
    {
        $status = $event->getResponse()->getStatus();
        if ($status > 499) {
            $event->stopPropagation();
        }
    }
}
