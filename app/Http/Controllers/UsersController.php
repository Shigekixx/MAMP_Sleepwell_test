<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Postモデルを使用するために追加

class UsersController extends Controller
{
    public function index()
    {
    $users = User::all(); // postsテーブルに保存されているデータをすべて取得
       return view('users.index', ['users' => $users]); // views/users/index.blade.php を表示する
    }
}