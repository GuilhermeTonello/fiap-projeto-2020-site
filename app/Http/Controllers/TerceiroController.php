<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

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

}
