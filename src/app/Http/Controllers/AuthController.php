<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        // ユーザー登録ページを表示
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // 登録処理（ここにバリデーションやユーザー登録のロジックを追加します）
        // 登録成功後、リダイレクト
        return redirect()->route('login.form');
    }

    public function showLoginForm()
    {
        // ログインページを表示
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // ログイン処理（ここにバリデーションと認証のロジックを追加します）
        // 認証成功後、リダイレクト
        return redirect()->route('admin.index');
    }

    public function logout()
    {
        // ログアウト処理
        Auth::logout();
        return redirect()->route('login.form');
    }
}
