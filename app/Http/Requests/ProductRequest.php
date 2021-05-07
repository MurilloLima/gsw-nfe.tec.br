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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cod' => 'required|unique:products',
            'uni_medida' => 'required',
            'valor' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do produto',
            'cod.required' => 'Informe o código do produto.',
            'cod.unique' => 'Produto já cadastrado com este código, escolha outro.',
            'uni_medida.required' => 'Informe qual a unidade medida'
        ];
    }
}
