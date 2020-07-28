<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.empresas.empresa_cadastro');
    }

public function adiciona(/*EmpresaRequest $request*/) {

    /*
        banco de dados
    */

    $sucesso = 'Empresa ' . Request::input('nome_fantasia') . ' registrada com sucesso.';
    return redirect()->action('EmpresaController@novo')->with('sucesso', $sucesso);
}

}
