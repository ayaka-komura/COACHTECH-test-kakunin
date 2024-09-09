<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // 使用するテーブル名を指定
    protected $table = 'contacts';

    // テーブルで使用するカラムを指定（fillable）
    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'phone1',
        'phone2',
        'phone3',
        'address',
        'building',
        'inquiry_type',
        'inquiry_content'
    ];
}
