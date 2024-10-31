<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
             'keyword' => 'required_without:product-name | max:255',
             'product-name' => 'required_without:keyword | max:255',
        ];
    }

    public function attributes() {
        return [
            'keyword' => '検索キーワード',
            'product-name' => 'メーカー名',
        ];
    }

    public function messages() {
        return [
            'keyword.max' => ':attributeは:max字以内で入力してください。',
            'keyword.required_without' => '検索キーワードまたはメーカー名を入力してください。',
            'product-name.max' => ':attributeは:max字以内で入力してください。',
            'product-name.required_without' => 'メーカー名または検索キーワードを入力してください。',
        ];
    }
}
