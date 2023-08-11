<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\BaseConntroller;
use App\Http\Requests\Auth\ReigsterRequest;
use App\Models\User;

class RegisterConstroller extends BaseConntroller
{
    /**用户注册
     * @return void
     */
    public function register(ReigsterRequest $request)
    {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        return $this->response->created();
    }
}
