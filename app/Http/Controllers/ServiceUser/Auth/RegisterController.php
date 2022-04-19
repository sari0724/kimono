<?php

namespace App\Http\Controllers\ServiceUser\Auth;

use App\ServiceUser;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    
    //上書き
    public function showRegistrationForm()
    {
        return view('serviceuser.auth.register');
    }
    
    //ユーザーをServiceUserに設定
    protected function guard()
    {
        return Auth::guard('serviceuser');
    }

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
     //リダイレクト先をServiceUser_homeに設定
    protected $redirectTo = RouteServiceProvider::SERVICEUSER_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest:serviceuser');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'company' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return ServiceUser::create([
            'company' => $data['company'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
