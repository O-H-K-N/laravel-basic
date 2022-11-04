<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // trueでないとバリデーションが適用されない
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>['required', 'string', 'max:20'],
            'title'=>['required', 'string', 'max:50'],
            // テーブル毎に一件ならunique:contact_formsを適用しておくと一意な要素として指定できる
            'email'=>['required', 'email', 'max:255'],
            'url'=>['required', 'nullable'],
            'gender'=>['required', 'boolean'],
            'age'=>['required'],
            'contact'=>['required', 'string', 'max:200'],
            'caution'=>['required', 'accepted'],
        ];
    }
}
