<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cadastro2Controller extends Controller
{
    public function create () {
    	return view('cadastro');
    }

    public function store() {
    	return view('enviar');
    }

    public function show () {
    	return view('usuarios');
    }

    public function edit() {
    	return view('editarCadastro');
    }

    public function destroy () {
    	return view('deleteCadastro');
    }
}