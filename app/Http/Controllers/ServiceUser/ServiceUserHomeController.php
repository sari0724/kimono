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
     //serviceuserのみアクセス可能
    public function __construct()
    {
        $this->middleware('guest:serviceuser')->except('logout');
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
