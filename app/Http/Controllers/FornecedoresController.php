<?php

namespace App\Http\Controllers;

class FornecedoresController extends Controller
{
    public function fornecedores()
    {
        $fornecedores = ['Fornecedor 1'];

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
