<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //書式：'キー名' => 'ルール1|ルール2|ルール3'
        return [
            'useroutfit.title' => 'required|string|max:50',
            'useroutfit.content' => 'required|string|max:4000',
        ];
    }
}
