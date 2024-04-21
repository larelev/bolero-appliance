<?php

use Bolero\Framework\Middleware\ExtractRouteInfo;
use Bolero\Framework\Middleware\History;
use Bolero\Framework\Middleware\RouterDispatcher;
use Bolero\Framework\Middleware\SessionManager;
use Bolero\Plugins\Authentication\Middlewares\VerifyCsrfToken;
use Bolero\Plugins\FlashMessage\Middlewares\FlashMessenger;

return [
    ExtractRouteInfo::class,
    SessionManager::class,
    FlashMessenger::class,
    VerifyCsrfToken::class,
    RouterDispatcher::class,
    History::class,
];
