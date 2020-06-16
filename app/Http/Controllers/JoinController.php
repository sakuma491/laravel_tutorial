<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\JoinRequest;

class JoinController extends Controller
{
    public function __construct() {
        $this->middleware('guest');
    }
    /**
    * 会員登録画面を表示する。
    */
    public function index() {
        return view('join.index');
    }
    /**
    * ユーザーを登録する。
    */
    public function join(JoinRequest $request) {
        $input = [
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password)
        ];
        $user = new User;
        $user->fill($input)->save();
        return redirect('/');
    }
}
