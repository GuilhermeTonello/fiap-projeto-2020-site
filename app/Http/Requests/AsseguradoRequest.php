<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Request;

class AsseguradoRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function messages() {
        return [
            'required' => 'O campo :attribute está vazio',
            'same' => '',
            'senha.same' => 'As senhas devem ser iguais',
        ];
    }

    public function rules() {
        return [
            'primeiro_nome' => 'required',
            'sobrenome' => 'required',
            'sexo' => 'required',
            'email' => 'required|email',
            'senha' => 'required|same:confirmar_senha',
            'confirmar_senha' => 'required|same:senha',
            'data_nascimento' => 'required',
            'rg' => 'required',
            'cpf' => 'required',
            'telefone' => 'required',
            'cep' => 'required',
            'logradouro' => 'required',
            'complemento' => 'required',
            'uf' => 'required',
            'cidade' => 'required',
            'foto_rg' => 'required',
        ];
    }
}
