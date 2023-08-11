<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{

    /**
     * 创建博客
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd('添加');
    }

    /**
     * 执行添加操作
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd('执行添加操作');
    }

    /**
     * 博客详情
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('查看博客');
    }

    /**
     * 博客编辑
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('编辑');
    }

    /**
     * 博客更新
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('执行更新');
    }

    /**
     * 博客删除
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd('删除博客');
    }

    /**博客修改状态
     * @param $id
     * @return void
     */
    public function status($id){
        dd('修改状态');
    }
}
