<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function index()
    {
        // Contactモデルからデータを取得
        $contacts = Contact::paginate(10);
        // 管理画面を表示
        return view('admin.index', compact('contacts'));
    }
}
