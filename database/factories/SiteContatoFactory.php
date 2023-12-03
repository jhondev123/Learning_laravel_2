<?php

namespace Database\Factories;

use App\Models\SiteContato;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiteContatoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SiteContato::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "nome" => fake()->name(),
            "telefone" => fake()->phoneNumber(),
            "email" => fake()->email(),
            "motivo_contato" => fake()->numberBetween(1,3),
            "mensagem" => fake()->text(),
        ];
    }
}
