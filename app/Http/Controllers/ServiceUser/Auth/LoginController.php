<?php

namespace App\Http\Controllers\ServiceUser\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;
    
    public function showLoginForm()
    {
        return view('serviceuser.auth.login');
    }
    
    protected function guard(){
        return Auth::guard('serviceuser');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //ログイン後にリダイレクトする場所の設定
    protected $redirectTo = RouteServiceProvider::SERVICEUSER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Loginメソッドは"lluminate\Foundation\Auth\AuthenticatesUsers"に記載
        $this->middleware('guest')->except('logout');
    }
}
