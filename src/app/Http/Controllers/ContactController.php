<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        // お問い合わせフォームの入力ページを表示
        return view('contact.form');
    }

    public function confirm(Request $request)
    {
        // フォームのバリデーション
        $validatedData = $request->validate([
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'gender' => 'required|string',
            'email' => 'required|email|max:255',
            'phone1' => 'nullable|string|max:3',
            'phone2' => 'nullable|string|max:4',
            'phone3' => 'nullable|string|max:4',
            'address' => 'nullable|string|max:255',
            'building' => 'nullable|string|max:255',
            'inquiry_type' => 'required|string|max:255',
            'inquiry_content' => 'nullable|string',
        ]);

        // セッションにデータを保存
        $request->session()->put('contact_data', $validatedData);

        // 入力内容の確認ページを表示
        return view('contact.confirm', ['data' => $validatedData]);
    }

    public function store(Request $request)
    {
        // セッションからデータを取得
        $contactData = $request->session()->get('contact_data');

        // データベースに保存
        Contact::create($contactData);

        // サンクスページにリダイレクト
        return redirect()->route('contact.thanks');
    }

    public function thanks()
    {
        // サンクスページを表示
        return view('contact.thanks');
    }
}

