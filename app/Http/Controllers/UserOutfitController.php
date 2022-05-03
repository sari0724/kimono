<?php

namespace App\Http\Controllers;

use App\User_outfit;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;

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
        //User_outfit.phpで表示件数の制限
        return view('index')->with(['useroutfit' => $useroutfit->getPaginateByLimit()]);
    }
    
    public function show(User_outfit $useroutfit)
    {
        return view('useroutfit')->with(['useroutfit' => $useroutfit]);
    }
    
    public function create()
    {
        return view('create');
    }
    
    /**
     * Userコーデを作成投稿する
     * 
     * @param  \Illuminate\Http\Request\PostRequest  $request
     */
    public function store(User_outfit $useroutfit, PostRequest $request)
    {
        //dd($request->all());
        $input = $request['useroutfit'];
        $useroutfit->fill($input)->save();
        return redirect('/useroutfits/' . $useroutfit->id);
    }
}
