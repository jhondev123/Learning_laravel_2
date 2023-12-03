<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fornecedor;
class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "Jhonattan";
        $fornecedor->email = "Jhonattan@gmail.com";
        $fornecedor->uf = "PR";
        $fornecedor->site = "Jhonattancurtarelli.net";
        $fornecedor->save();
    }
}
