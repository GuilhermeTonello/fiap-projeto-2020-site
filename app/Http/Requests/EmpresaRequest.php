<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute está vazio',
        ];
    }

    public function rules() {
        return [
            'nome_fantasia' => 'required',
            'razao_social' => 'required',
            'email' => 'required',
            'telefone' => 'required',
            'autorizante' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'complemento' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
        ];
    }
}
