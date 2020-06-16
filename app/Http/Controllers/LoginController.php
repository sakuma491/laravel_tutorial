<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\LoginRequest;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    /**
    * ログイン画面を表示する。
    */
    public function index() {
        return view('login.index');
    }
    /**
    * ユーザー認証を行う。
    */
    public function login(LoginRequest $request) {
        $username = $request->username;
        $password = $request->password;
        $remember = true;
        if(Auth::attempt(['username' => $username, 'password' => $password], $remember)) {
            return redirect('/todolist');
        } else {
            return view('login.index', [
                'message' => 'Incorrect username or password.'
            ]);
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
