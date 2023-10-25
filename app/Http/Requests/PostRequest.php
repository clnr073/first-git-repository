<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            // バリデーションを適用するルールを記載
            // 書式：'キー名' => 'ルール1|ルール2|ルール3'
            // 入れ子になっている場合は.(ドット)で結合
            'post.title' => 'required|string|max:100',
            'post.body' => 'required|string|max:4000',
        ];
    }
}
