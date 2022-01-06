<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\document;
use Illuminate\Support\Str;

class DocumentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $documento = \App\Models\document::class;

    public function definition()
    {
        return [
            'titulo'=> $this->faker->title(),
            'tamanho_documento'=> $this->faker->numerify(),
            'numero_assinatura'=> $this->faker->numerify(),
            'assinatura_responsavel'=> $this->faker->name(),
            'quantidade_pagina' => $this->faker->numerify()
            ];
    }
}
