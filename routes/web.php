<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//博客首页
Route::get('index', [\App\Http\Controllers\IndexController::class, 'index'])->name('blog.index');
//博客资源
Route::resource('blog', \App\Http\Controllers\BlogController::class)->except(['index']);
//修改博客状态
Route::patch('blog/{id}', [\App\Http\Controllers\BlogController::class, 'status'])->name('blog.status');
//博客-个人中心-个人信息-页面
Route::get('/user', [\App\Http\Controllers\UserController::class, 'infoPage'])->name('user.avatarPage');
//博客-个人中心-修改个人信息-更新数据
Route::put('/user/infoUpdate', [\App\Http\Controllers\UserController::class, 'infoUpdate'])->name('user.info.update');
//博客-个人中心-个人信息-头像-页面
Route::get('/user/avatar', [\App\Http\Controllers\UserController::class, 'avatarPage'])->name('user.avatar');
//博客-个人中心-头像-更新数据
Route::get('/user/avatarUpdate', [\App\Http\Controllers\UserController::class, 'avatarUpdate'])->name('user.avatar.update');
//所有博客
Route::get('/user/blog', [\App\Http\Controllers\UserController::class, 'blog'])->name('user.blog');
//评论路由-单行为
Route::post('/blog/{id}/comment', \App\Http\Controllers\CommentController::class)->name('blog.comment');

