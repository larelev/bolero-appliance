<?php

use Bolero\Framework\Routing\Route;
use Bolero\Plugins\Authentication\Configuration as Authentication;
use Bolero\Plugins\Dashboard\Configuration as Dashboard;

Route::get('/', [\App\Controllers\HomeController::class, 'index']);
Route::get('/posts/{id:\d+}', [\App\Controllers\PostController::class, 'show',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::get('/posts', [\App\Controllers\PostController::class, 'create',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::post('/posts', [\App\Controllers\PostController::class, 'store',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::get('/hello/{name:.*}', function (string $name) {
    return new \Bolero\Framework\Http\Response(content: <<<HTML
    Hello $name!
    HTML);
});

Authentication::routes();
Dashboard::routes();
