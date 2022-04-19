<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     //このmiddlewareのauth設定により、HomeControllerを経由して行われる処理は全て認証によるアクセスの制限が行われる
     //middlewareのauthについては"App/Http/Kamel"に記載
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
