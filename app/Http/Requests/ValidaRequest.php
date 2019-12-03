<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\cadastroAuxiliar;

class ValidaRequest extends FormRequest
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

        $valida = cadastroAuxiliar::pluck('id_usuario');
        return [
            ('id_usuario') => [Rule::notIn($valida)]
        ];
    }

    public function messages(){

        return [
            'iid_usuario.not_in'=>'Não é possivel excluir, pois está em uso'
        ];
    }
}
