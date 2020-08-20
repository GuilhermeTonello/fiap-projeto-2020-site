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
      $resposta = DB::select('SELECT * FROM empresas WHERE id = ?', [$id]);
      if (empty($resposta)) return EmpresaController::nao_existe();
      $deletado = $resposta[0]->razao_social;
      DB::delete('DELETE FROM empresas WHERE id = ?', [$id]);
      return EmpresaController::lista()->with('u', $resposta[0])->with('sucesso', 'Empresa ' . $deletado . ' deletada com sucesso!');

    }

    public function editar($id) {
      $id = Request::route('id');
      $resposta = DB::select('SELECT * FROM empresas WHERE id = ?', [$id]);
      if (empty($resposta)) return EmpresaController::nao_existe();

      return view('admin.gerenciamento.empresas.empresa_editar')->with('e', $resposta[0]);
    }

    public function update(/*EmpresaRequest $request,*/ $id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM empresas WHERE id = ?', [$id]);
        if (empty($resposta)) return EmpresaController::nao_existe();
        $editado = $resposta[0]->razao_social;

        $nome_fantasia = Request::input('nome_fantasia');
        $razao_social = Request::input('razao_social');
        $cnpj = Request::input('cnpj');
        $senha = Request::input('senha');
        $email = Request::input('email');
        $telefone = Request::input('telefone');
        $senha = Request::input('senha');
        $autorizante = Request::input('autorizante');
        $endereco = json_encode(array('cep' => Request::input('cep'),'logradouro' => Request::input('logradouro'),'uf' => Request::input('uf'),'cidade' => Request::input('cidade'), 'bairro' => Request::input('bairro'), 'complemento' => Request::input('complemento') ), true);
        DB::update('UPDATE empresas SET razao_social = ?, nome_fantasia = ?, cnpj = ?, senha = ?, email = ?, telefone = ?, autorizante = ?, endereco = ? WHERE id = ?',
        array($nome_fantasia, $razao_social, $cnpj, $senha, $email, $telefone, $autorizante, $endereco, $id));

        return EmpresaController::lista()->with('u', $resposta[0])->with('sucesso', 'Empresa ' . $editado . ' editada com sucesso!');
    }

    public function novo() {
        return view('admin.gerenciamento.empresas.empresa_cadastro');
    }

    public function lista() {
      $usuarios = DB::select('SELECT * FROM empresas');
      return view('admin.gerenciamento.empresas.empresas_lista')->with('empresas', $usuarios);
    }

    public function ver($id) {
      $id = Request::route('id');
      $resposta = DB::select('SELECT * FROM empresas WHERE id = ?', [$id]);
      if (empty($resposta)) return EmpresaController::lista()->with('erro', 'Esse usuário não existe!');
      return view('admin.gerenciamento.empresas.empresa_ver')->with('e', $resposta[0]);

    }

    public function adiciona(/*EmpresaRequest $request*/) {

      $nome_fantasia = Request::input('nome_fantasia');
      $razao_social = Request::input('razao_social');
      $cnpj = Request::input('cnpj');
      $senha = Request::input('senha');
      $email = Request::input('email');
      $telefone = Request::input('telefone');
      $senha = Request::input('senha');
      $autorizante = Request::input('autorizante');
      $endereco = json_encode(array('cep' => Request::input('cep'),'logradouro' => Request::input('logradouro'),'uf' => Request::input('uf'),'cidade' => Request::input('cidade'), 'bairro' => Request::input('bairro'), 'complemento' => Request::input('complemento') ), true);

      DB::insert('INSERT INTO empresas(razao_social, nome_fantasia, cnpj, senha, email, telefone, autorizante, endereco) VALUES(?, ?, ?, ?, ?, ?, ?, ?)',
      array($nome_fantasia, $razao_social, $cnpj, $senha, $email, $telefone, $autorizante, $endereco));

      $sucesso = 'Empresa ' . Request::input('nome_fantasia') . ' registrada com sucesso.';
      return redirect()->action('EmpresaController@novo')->with('sucesso', $sucesso);
    }

}
