<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\Motivo_contato;

class ContatoController extends Controller
{
    public function contato(Request $request)
    {
        $motivo_contatos = Motivo_contato::all();

        return view("site.contato", ['motivo_contatos' => $motivo_contatos]);
    }
    public function sendMessage(Request $request)
    {

        $request->validate([
            "nome" => "required|min:3|max:40",
            "email" => "email",
            "telefone" => "required",
            "mensagem" => "required",
            "motivo" => "required",
        ]);
        SiteContato::create($request->all());

        // return view("site.contato", ["titulo" => "Contato (teste)"]);
    }
}
