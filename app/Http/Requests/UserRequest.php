<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'password' => 'required | min:8 | alpha_num',
            'email' => 'required | max:255 | email',
        ];
    }

    public function attributes() {
        return [
            'password' => 'パスワード',
            'email' => 'メールアドレス',
        ];
    }

    public function messages() {
        return [
            'password.required' => ':attributeを入力してください。',
            'password.min' => ':attributeは:min字以上で入力してください。',
            'password.alphs_num' => ':attributeは英数字で入力してください。',
            'email.required' => ':attributeを入力してください。',
            'email.max' => ':attributeは:max字以内に入力してください。',
            'email.email' => ':attributeを入力してください。',
        ];
    }
}
