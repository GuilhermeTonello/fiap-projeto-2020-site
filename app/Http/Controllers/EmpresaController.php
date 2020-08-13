<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function nao_existe() {
        return EmpresaController::lista()->with('erro', 'Esse usuário não existe!');
    }

    public function deletar($id) {
        $id = Request::route('id');
        return EmpresaController::lista();
    }

    public function editar($id) {
        $id = Request::route('id');
        return view('admin.gerenciamento.empresas.empresa_editar');
    }

    public function update(/*EmpresaRequest $request,*/ $id) {
        $id = Request::route('id');
        return EmpresaController::lista();
    }

    public function novo() {
        return view('admin.gerenciamento.empresas.empresa_cadastro');
    }

    public function lista() {
        return view('admin.gerenciamento.empresas.empresas_lista');
    }

    public function ver($id) {
        $id = Request::route('id');
        //$resposta = DB::select('SELECT * FROM assegurados WHERE id = ?', [$id]);
        //if (empty($resposta)) return AsseguradoController::nao_existe();
        return view('admin.gerenciamento.empresas.empresa_ver');
    }

    public function adiciona(/*EmpresaRequest $request*/) {

        /*
            DB:insert('',
        array());
        */

        $sucesso = 'Empresa ' . Request::input('nome_fantasia') . ' registrada com sucesso.';
        return redirect()->action('EmpresaController@novo')->with('sucesso', $sucesso);
    }

}
