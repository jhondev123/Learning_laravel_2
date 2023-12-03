<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Motivo_contato;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Motivo_contato::create(['motivo_contato' => "Elogio"]);
        Motivo_contato::create(['motivo_contato' => "Reclamação"]);
        Motivo_contato::create(['motivo_contato' => "Dúvida"]);
    }
}
