<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class ApoliceController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    public function index_automovel() {
        return view('admin.apolices.automovel.apolice_automovel_index');
    }

    public function index_residencial() {
        return view('admin.apolices.residencial.apolice_residencial_index');
    }

    public function index_empresarial() {
        return view('admin.apolices.empresarial.apolice_empresarial_index');
    }

    public function index_vida() {
        return view('admin.apolices.vida.apolice_vida_index');
    }

}
