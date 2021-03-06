<?php

namespace App\Http\Controllers\Atleta;

use Illuminate\Http\Request;

class CadastrarAtletaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('atletas/cadastrarAtleta');
    }
}
