<?php

use App\Controllers\HomeController;
use App\Controllers\LandingController;
use App\Controllers\PostController;
use Bolero\Framework\Http\Response;
use Bolero\Framework\Routing\Route;
use Bolero\Plugins\Authentication\Configuration as Authentication;
use Bolero\Plugins\Dashboard\Configuration as Dashboard;

Route::get('/', [HomeController::class, 'index']);
Route::get('/landing', [LandingController::class, 'index']);
Route::get('/posts/{id:\d+}', [PostController::class, 'show',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::get('/posts', [PostController::class, 'create',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::post('/posts', [PostController::class, 'store',
    [
        \Bolero\Plugins\Authentication\Middlewares\Authentication::class,
    ]]);
Route::get('/hello/{name:.*}', function (string $name) {
    return new Response(content: <<<HTML
    Hello $name!
    HTML
    );
});

Authentication::routes();
Dashboard::routes();
