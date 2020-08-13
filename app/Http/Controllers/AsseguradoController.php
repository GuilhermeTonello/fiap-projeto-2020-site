<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\AsseguradoRequest;

class AsseguradoController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function nao_existe() {
        return AsseguradoController::lista()->with('erro', 'Esse usuário não existe!');
    }

    public function editar($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM assegurados WHERE id = ?', [$id]);
        if (empty($resposta)) return AsseguradoController::nao_existe();

        return view('admin.gerenciamento.assegurados.assegurado_editar')->with('u', $resposta[0]);
    }

    public function update(/*AsseguradoRequest $request,*/ $id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM assegurados WHERE id = ?', [$id]);
        if (empty($resposta)) return AsseguradoController::nao_existe();
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
          DB::update('UPDATE assegurados SET primeiro_nome = ?, ultimo_nome = ?, sexo = ?, nome_social = ?, genero = ?, email = ?, senha = ?, data_nascimento = ?, rg = ?, cpf = ?, telefone = ?, endereco = ? WHERE id = ?',
    array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone, $endereco, $id));
        }else{
          $rg_file = Request::file('foto_rg')->store('foto_rg');
          DB::update('UPDATE assegurados SET primeiro_nome = ?, ultimo_nome = ?, sexo = ?, nome_social = ?, genero = ?, email = ?, senha = ?, data_nascimento = ?, rg = ?, cpf = ?, telefone = ?, endereco = ?, foto_rg = ? WHERE id = ?',
    array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone, $endereco, $rg_file, $id));
        }
        return AsseguradoController::lista()->with('u', $resposta[0])->with('sucesso', 'Assegurado(a) ' . $editado . ' editado(a) com sucesso!');
    }

    public function deletar($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM assegurados WHERE id = ?', [$id]);
        if (empty($resposta)) return AsseguradoController::nao_existe();
        $deletado = $resposta[0]->primeiro_nome;
        DB::delete('DELETE FROM assegurados WHERE id = ?', [$id]);
        return AsseguradoController::lista()->with('u', $resposta[0])->with('sucesso', 'Assegurado(a) ' . $deletado . ' deletado(a) com sucesso!');
    }

    public function ver($id) {
        $id = Request::route('id');
        $resposta = DB::select('SELECT * FROM assegurados WHERE id = ?', [$id]);
        if(Storage::exists($resposta[0]->foto_rg)){
          $resposta[1] = base64_encode(Storage::get($resposta[0]->foto_rg));
        }else{$resposta[1] = null;}
        if (empty($resposta)) return AsseguradoController::lista()->with('erro', 'Esse usuário não existe!');
        return view('admin.gerenciamento.assegurados.assegurado_ver')->with('u', $resposta[0])->with('i', $resposta[1]);
    }

    public function novo() {
        return view('admin.gerenciamento.assegurados.assegurado_cadastro');
    }

    public function lista() {
        $usuarios = DB::select('SELECT * FROM assegurados');
        return view('admin.gerenciamento.assegurados.assegurados_lista')->with('usuarios', $usuarios);
    }

    public function adiciona(/*AsseguradoRequest $request*/) {

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
                DB::insert('INSERT INTO assegurados(primeiro_nome, ultimo_nome, sexo, email, senha, data_nascimento, rg, cpf, telefone, endereco, foto_rg) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            array($primeiro_nome, $sobrenome, $sexo, $email, $senha, $data_nascimento, $rg, $cpf, $telefone,$endereco, $rg_file));
        } else {
                DB::insert('INSERT INTO assegurados(primeiro_nome, ultimo_nome, sexo, nome_social, genero, email, senha, data_nascimento, rg, cpf, telefone,endereco,	foto_rg) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
            array($primeiro_nome, $sobrenome, $sexo, $nome_social, $genero, $email, $senha, $data_nascimento, $rg, $cpf, $telefone,$endereco, $rg_file));
        }

        $sucesso = 'Assegurado(a) ' . Request::input('primeiro_nome') . ' registrado(a) com sucesso.';
        return redirect()->action('AsseguradoController@novo')->with('sucesso', $sucesso);
    }
}
