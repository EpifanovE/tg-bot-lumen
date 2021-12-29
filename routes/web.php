<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->post("/bot/{token}", [
    'middleware' => 'bot',
    'uses' => "BotController@bot"
]);

$router->get('/', function () use ($router) {
    return $router->app->version();
});
