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
}
