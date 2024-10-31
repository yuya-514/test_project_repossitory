<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
            'company-id' => 'required | max:255',
            'product-name' => 'required | max:255',
            'price' => 'required | integer',
            'stock' => 'required | integer',
            'comment' => 'max:255',
            'img-path' => 'nullable | image',
        ];
    }

    public function attributes() {
        return[
            'company-id' => '商品名',
            'product-name' => 'メーカー名',
            'price' => '価格',
            'stock' => '在庫数',
            'comment' => 'コメント',
            'img-path' => '商品画像',
        ];
    }

    public function messages() {
        return[
            'company-id.required' => ':attributeを入力してください。',
            'company-id.max' => ':attributeは:max字以内で入力してください。',
            'product-name.required' => ':attributeを入力してください。',
            'product-name.max' => ':attributeは:max字以内で入力してください。',
            'price.required' => ':attributeを入力してください。',
            'price.integer' => ':attributeは:integerを入力してください。',
            'stock.required' => ':attributeを入力してください。',
            'stock.integer' => ':attributeは:integerを入力してください。',
            'comment.max' => ':attributeは:max字以内で入力してください。',
            'img-path.imag' => ':attributeは:imagを選択してください。',
        ];
    }
}
