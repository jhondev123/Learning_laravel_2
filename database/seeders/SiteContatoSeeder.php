<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteContato;
use Database\Factories\SiteContatoFactory;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contato = new SiteContato();
        // $contato->nome="jhonattan";
        // $contato->telefone="(45)99933-8406";
        // $contato->email="jhonattan@gmail.com";
        // $contato->motivo_contato_id=1;
        // $contato->mensagem="Seja bem vindo ao SG";
        // $contato->save();
        \App\Models\SiteContato::factory()->count(100)->create();
    }
}
