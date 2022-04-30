<?php

namespace App\Http\Controllers;

use App\User_outfit;
use Illuminate\Http\Request;

class UserOutfitController extends Controller
{
    /**
     * User_outfit一覧を表示する
     * 
     * @param User_outfit User_outfitモデル
     * @return array User_outfitモデルリスト
     */
    public function index(User_outfit $useroutfit)
    {
        return $useroutfit->get();
    }
    
    public function show(User_outfit $useroutfit)
    {
        return view('useroutfit')->with(['useroutfit' => $useroutfit]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(User_outfit $useroutfit, Request $request)
    {
        //dd($request->all());
        $input = $request['useroutfit'];
        $useroutfit->fill($input)->save();
        return redirect('/useroutfits/' . $useroutfit->id);
    }
}
