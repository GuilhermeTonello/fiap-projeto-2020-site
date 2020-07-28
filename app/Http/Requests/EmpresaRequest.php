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
        ];
    }
}
