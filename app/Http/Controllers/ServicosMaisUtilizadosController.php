<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class ServicosMaisUtilizadosController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function novo() {
        return view('admin.principal.analytics.servicos_mais_utilizados');
    }

}
