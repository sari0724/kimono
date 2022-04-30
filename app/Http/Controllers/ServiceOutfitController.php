<?php

namespace App\Http\Controllers;

use App\Service_outfit;
use Illuminate\Http\Request;

class ServiceOutfitController extends Controller
{
    /**
     * Service_outfit一覧を表示する
     * 
     * @param Service_outfit Service_outfitモデル
     * @return array Service_outfitモデルリスト
     */
    public function index(Service_outfit $serviceoutfit)
    {
        return $serviceoutfit->get();
    }
    
    /**
     * Service_outfitを表示する
     * 
     * @param Service_outfit Service_outfitモデル
     * @return array Service_outfitモデルリスト
     */
    public function show(Service_outfit $serviceoutfit)
    {
        return view('serviceoutfit')->with(['serviceoutfit' => $serviceoutfit]);
    }
}
