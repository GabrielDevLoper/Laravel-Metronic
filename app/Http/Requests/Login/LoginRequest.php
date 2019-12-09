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
            'usuario' => 'required',
            'senha' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'usuario.required' => 'Favor digitar usuário',
            'senha.required' => 'Favor digitar a senha'
        ];
    }
}

//05637229406
//teste1