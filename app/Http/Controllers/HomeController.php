<?php

namespace App\Http\Controllers;

use App\Models\Motivo_contato;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $motivo_contatos = Motivo_contato::all();

        return view("site.home", ['motivo_contatos' => $motivo_contatos]);
    }
}
