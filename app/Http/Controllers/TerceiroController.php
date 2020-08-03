<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\TerceiroRequest;

class TerceiroController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.terceiros.terceiros_cadastro');
    }

    public function lista() {
        return view('admin.gerenciamento.terceiros.terceiros_lista');
    }

    public function adiciona(TerceiroRequest $request) {

      /*
      DB::insert('INSERT INTO terceiros values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
  Request::except('confirmar_senha'));
      */

      $sucesso = 'Terceiro ' . Request::input('primeiro_nome') . ' registrado(a) com sucesso.';
      return redirect()->action('TerceiroController@novo')->with('sucesso', $sucesso);
  }

}
