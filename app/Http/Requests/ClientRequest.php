<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required',
            'andress' => 'required',
            'cidade' => 'required',
            'uf' => 'required',
            'phone'=> 'required',
            'bairro'=> 'required',
            'cep'=> 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do cliente.',
            'andress.required' => 'Informe o endereço.',
            'phone.required'=> 'Informe o telefone para contato.',
        ];
        # code...
    }
}
