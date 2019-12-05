<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'usuario' => 'request',
            'senha' => 'request'
        ];
    }

    public function messages()
    {
        return [
            'usuario.request' => 'Favor digitar usuário',
            'senha.request' => 'Favor digitar a senha'
        ];
    }
}
