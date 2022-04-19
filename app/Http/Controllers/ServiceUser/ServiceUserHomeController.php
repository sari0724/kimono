<?php

namespace App\Http\Controllers\ServiceUser;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceUserHomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     //ユーザのみアクセス可能
     //このmiddlewareのauth設定により、HomeControllerを経由して行われる処理は全て認証によるアクセスの制限が行われる
     //middlewareのauthについては"App/Http/Kamel"に記載
    public function __construct()
    {
        $this->middleware('auth:serviceuser'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('serviceuser.home');
    }
}
