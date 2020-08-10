<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AsseguradoRequest;

class AsseguradoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.assegurados.assegurado_cadastro');
    }

    public function lista() {
        return view('admin.gerenciamento.assegurados.assegurados_lista');
    }

    public function adiciona(/*AsseguradoRequest $request*/) {


        DB::insert('INSERT INTO assegurados(primeiro_nome, sobrenome, sexo, nome_social, genero, email, senha, data_nascimento, rg, cpf, telefone) VALUES()',
    Request::except('confirmar_senha'));


        $sucesso = 'Assegurado(a) ' . Request::input('primeiro_nome') . ' registrado(a) com sucesso.';
        return redirect()->action('AsseguradoController@novo')->with('sucesso', $sucesso);
    }
}
