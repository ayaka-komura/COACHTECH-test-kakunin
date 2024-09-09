<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// お問い合わせフォーム入力ページ
Route::get('/', [ContactController::class, 'index'])->name('contact.form');
// お問い合わせフォーム確認ページ
Route::post('/confirm', [ContactController::class, 'confirm'])->name('contact.confirm');
// お問い合わせフォーム送信処理（データの保存）
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
// サンクスページ
Route::get('/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');

// 管理画面
Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

// ユーザー登録ページ
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// ログインページ
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

