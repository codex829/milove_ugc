<?php

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

use App\Http\Controllers\API\v1\UgcController;
use FastRoute\Route;

$router->get('/', function () use ($router) {
    return $router->app->version();
});
// $router->get('/api/v1/reasonlist',[UgcController::class,'list']);

$router->get('api/v1/reasonlist',['uses'=>'API\v1\UgcController@list']);
$router->post('api/v1/report',['uses'=>'API\v1\UgcController@report']);