<?php

namespace App\Http\Controllers;

use App\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    /**
     * Story一覧を表示する
     * 
     * @param Story Storyモデル
     * @return array Storyモデルリスト
     */
    public function index(Story $story)
    {
        return $story->get();
    }
    
    /**
     * 特定IDのpostを表示する
     *
     * @params Object Post // 引数の$postはid=1のPostインスタンス
     * @return Reposnse post view
     */
    public function show(Story $story)
    {
        return view('story')->with(['story' => $story]);
    }
}
