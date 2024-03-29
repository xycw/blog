<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    //$api->get('test',[\App\Http\Controllers\TestController::class,'test']);
    //$api->get('login',[\App\Http\Controllers\TestController::class,'login']);

    $api->group(['middleware'=>'api.auth'],function ($api){
        $api->get('test',[\App\Http\Controllers\TestController::class,'test']);
    });
});

