<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class TrofeusController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.principal.gameficacao.trofeus');
    }

    public function adiciona(/*TrofeusRequest $request*/) {
        $sucesso = 'Troféu ' . Request::input('nome') . ' registrado com sucesso.';
        return redirect()->action('TrofeusController@novo')->with('sucesso', $sucesso);
    }

}
