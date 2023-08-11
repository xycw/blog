<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 个人信息
     * @return void
     */
    public function infoPage(){
        dd('个人信息页面');
    }

    /**执行修改操作
     * @return void
     */
    public function infoUpdate(){
        dd('执行修改');
    }

    /**头像页面
     * @return void
     */
    public function avatarPage(){
        dd('头像页面');
    }

    /**
     * 头像修改
     * @return void
     */
    public function avatarUpdate(){
        dd('头像修改');
    }

    /**
     * 所有博客
     * @return void
     */
    public function blog(){
        dd('所有博客');
    }
}
