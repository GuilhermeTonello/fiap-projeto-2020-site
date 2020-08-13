<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\TerceiroRequest;

class TerceiroController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.terceiros.terceiros_cadastro');
    }

    public function nao_existe() {
        return TerceiroController::lista()->with('erro', 'Esse usuário não existe!');
    }

    public function lista() {
        $terceiros = DB::select('SELECT * FROM terceirizados');
        return view('admin.gerenciamento.terceiros.terceiros_lista')->with('terceiros', $terceiros);
    }

    public function deletar($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM terceirizados WHERE id = ?', [$id]);
        if (empty($resposta)) return TerceiroController::nao_existe();
        $deletado = $resposta[0]->primeiro_nome;
        DB::delete('DELETE FROM terceirizados WHERE id = ?', [$id]);
        return TerceiroController::lista()->with('u', $resposta[0])->with('sucesso', 'Terceirizado(a) ' . $deletado . ' deletado(a) com sucesso!');
    }

    public function editar($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM terceirizados WHERE id = ?', [$id]);
        if (empty($resposta)) return TerceiroController::nao_existe();

        return view('admin.gerenciamento.terceiros.terceiros_editar')->with('u', $resposta[0]);
    }

    public function update(/*TerceiroRequest $request,*/ $id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM terceirizados WHERE id = ?', [$id]);
        if (empty($resposta)) return TerceiroController::nao_existe();
        $editado = $resposta[0]->primeiro_nome;

        $primeiro_nome = Request::input('primeiro_nome');
        $sobrenome = Request::input('sobrenome');
        $sexo = Request::input('sexo');
        $nome_social = Request::input('nome_social');
        $genero = Request::input('genero');
        $email = Request::input('email');
        $senha = Request::input('senha');
        $data_nascimento = Request::input('data_nascimento');
        $rg = Request::input('rg');
        $cpf = Request::input('cpf');
        $telefone = Request::input('telefone');
        $endereco = json_encode(array('cep' => Request::input('cep'),'logradouro' => Request::input('logradouro'),'uf' => Request::input('uf'),'cidade' => Request::input('cidade'), 'bairro' => Request::input('bairro'), 'complemento' => Request::input('complemento') ), true);
        if(!Request::hasFile('foto_rg')) {
          DB::update('UPDATE terceirizados SET primeiro_nome = ?, ultimo_nome = ?, sexo = ?, nome_social = ?, genero = ?, email = ?, senha = ?, data_nascimento = ?, rg = ?, cpf = ?, telefone = ?, endereco = ? WHERE id = ?',
    array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone, $endereco, $id));
        }else{
          $rg_file = Request::file('foto_rg')->store('foto_rg');
          DB::update('UPDATE terceirizados SET primeiro_nome = ?, ultimo_nome = ?, sexo = ?, nome_social = ?, genero = ?, email = ?, senha = ?, data_nascimento = ?, rg = ?, cpf = ?, telefone = ?, endereco = ?, foto_rg = ? WHERE id = ?',
    array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone, $endereco, $rg_file, $id));
        }
        return TerceiroController::lista()->with('u', $resposta[0])->with('sucesso', 'Terceirizado(a) ' . $editado . ' editado(a) com sucesso!');
    }

    public function ver($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM terceirizados WHERE id = ?', [$id]);
        if(Storage::exists($resposta[0]->foto_rg)){
          $resposta[1] = base64_encode(Storage::get($resposta[0]->foto_rg));
        }else{$resposta[1] = null;}
        if (empty($resposta)) return TerceiroController::nao_existe();
        return view('admin.gerenciamento.terceiros.terceiro_ver')->with('u', $resposta[0])->with('i', $resposta[1]);
    }

    public function adiciona(/*TerceiroRequest $request*/) {

      $primeiro_nome = Request::input('primeiro_nome');
      $sobrenome = Request::input('sobrenome');
      $sexo = Request::input('sexo');
      $nome_social = Request::input('nome_social');
      $genero = Request::input('genero');
      $email = Request::input('email');
      $senha = Request::input('senha');
      $data_nascimento = Request::input('data_nascimento');
      $rg = Request::input('rg');
      $cpf = Request::input('cpf');
      $telefone = Request::input('telefone');
      $endereco = json_encode(array('cep' => Request::input('cep'),'logradouro' => Request::input('logradouro'),'uf' => Request::input('uf'),'cidade' => Request::input('cidade'), 'bairro' => Request::input('bairro'), 'complemento' => Request::input('complemento') ), true);
      $rg_file = Request::file('foto_rg')->store('foto_rg');
      if (empty($nome_social) && empty($genero)) {
              DB::insert('INSERT INTO terceirizados(primeiro_nome, ultimo_nome, sexo, email, senha, data_nascimento, rg, cpf, telefone, endereco, foto_rg) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
          array($primeiro_nome, $sobrenome, $sexo, $email, $senha, $data_nascimento, $rg, $cpf, $telefone,$endereco, $rg_file));
      } else {
              DB::insert('INSERT INTO terceirizados(primeiro_nome, ultimo_nome, sexo, nome_social, genero, email, senha, data_nascimento, rg, cpf, telefone,endereco,	foto_rg) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
          array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone,$endereco, $rg_file));
      }

      $sucesso = 'Terceiro ' . Request::input('primeiro_nome') . ' registrado(a) com sucesso.';
      return redirect()->action('TerceiroController@novo')->with('sucesso', $sucesso);
  }

}
