<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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

    public function messages() {
        return [
            'nome.required' => 'Preencha o campo nome!',
            'nome.max' => 'Nome deve ter até 255 caracteres!',
            'email.required' => 'Preencha o campo email válido!',
            'email.max' => 'Email deve ter até 255 caracteres!',
            'endereco.required' => 'Preencha o campo endereço!'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'email' => 'required|email|max:255',
            'endereco' => 'required'
        ];
    }
}
