<?php

/** @var \Laravel\Lumen\Routing\Router $router */

use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// TODO
$router->group(['prefix' => 'auth'], function () use ($router) {

    $router->get('/facebook/redirect', function () {
        return Socialite::driver('facebook')->stateless()->redirect();
    });

    $router->get('/facebook/callback', function () {
        $user = Socialite::driver('facebook')->stateless()->user();
        dd($user);
    });
});
