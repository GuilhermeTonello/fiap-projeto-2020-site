<?php

namespace App\Http\Controllers;

use Request; //se der erro usar: use Request;
use Illuminate\Support\Facades\DB;

class ApoliceController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }


    

}
