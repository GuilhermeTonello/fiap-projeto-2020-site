<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.funcionarios.funcionarios_cadastro');
    }
}
