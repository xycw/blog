<?php
$api = app('Dingo\Api\Routing\Router');
$api->version('v1', ['middleware' => 'api.throttle', 'limit' => 60, 'expires' => 1], function ($api) {
    //路由组
    $api->group(['prefix' => 'admin'], function ($api) {
        //需要登录，才能访问
        $api->group(['middleware' => 'api.auth'], function ($api) {
            /*
    * 用户管理
    */
            //禁用用户
            $api->patch('user/{userId}/look', [\App\Http\Controllers\Admin\UserController::class, 'lock']);
            $api->resource('users', \App\Http\Controllers\Admin\UserController::class, [
                'only' => ['index', 'show'],
            ]);
        });
    });
});
