<?php

return [
    \Bolero\Framework\Middleware\ExtractRouteInfo::class,
    \Bolero\Framework\Middleware\SessionManager::class,
    \Bolero\Plugins\FlashMessage\Middlewares\FlashMessenger::class,
    \Bolero\Plugins\Authentication\Middlewares\VerifyCsrfToken::class,
    \Bolero\Framework\Middleware\RouterDispatcher::class,
    \Bolero\Framework\Middleware\History::class,
];
