<?php
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['middleware' => 'api.throttle', 'limit' => 60, 'expires' => 1], function ($api) {
    //路由组
    $api->group(['prefix' => 'auth'], function ($api) {
        //注册
        $api->post('register', [\App\Http\Controllers\Auth\RegisterConstroller::class, 'register']);
        //登录
        $api->post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
        //需要登录，才能访问
        $api->group(['middleware' => 'api.auth'], function ($api) {
            //退出
            $api->post('logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);
            //刷新
            $api->post('refresh', [\App\Http\Controllers\Auth\LoginController::class, 'refresh']);
        });
    });
});
