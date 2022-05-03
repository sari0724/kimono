<?php

namespace App\Http\Controllers;

use App\User_outfit;
use App\Service_outfit;
use App\Story;
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
    
    /**
     * User_outfit,Service_outfit,Story一覧を表示する
     * 
     * @param Service_outfit Service_outfitモデル
     * @return array Service_outfitモデルリスト
     */
    public function __index() {
        $useroutfit = User_outfit::Paginate(3, ['*'], 'useroutfit')
            ->appends(['serviceoutfit' => \Request::get('serviceoutfit')]);
        $serviceoutfit = Service_outfit::Paginate(3, ['*'], 'serviceoutfit')
            ->appends(['useroutfit' => \Request::get('useroutfit')]);
        $story = Story::Paginate(3, ['*'], 'story')
            ->appends(['serviceoutfit' => \Request::get('serviceoutfit')]);

        return view('index',[
            'useroutfits' => $useroutfit,
            'serviceoutfits' => $serviceoutfit,
            'stories' => $story,
        ]);
    }
}
