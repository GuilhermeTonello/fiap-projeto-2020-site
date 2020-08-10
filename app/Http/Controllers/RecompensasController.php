<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class RecompensasController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.principal.gameficacao.recompensas');
    }

    public function adiciona(/*RecompensasRequest $request*/) {
        $sucesso = 'Recompensa ' . Request::input('nome') . ' registrada com sucesso.';
        return redirect()->action('RecompensasController@novo')->with('sucesso', $sucesso);
    }

}
