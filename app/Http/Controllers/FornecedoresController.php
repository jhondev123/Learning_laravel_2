<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedor = [
            'fornecedor1' => [
                "nome" => 'Jhonattan',
                'idade' => '20'
            ]
        ];
        return view("app.fornecedor.index", compact('fornecedor'));
    }
}
