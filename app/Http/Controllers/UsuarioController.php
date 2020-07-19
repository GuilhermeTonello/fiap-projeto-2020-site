<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.gerenciamento.usuarios.usuario_cadastro');
    }
}
