<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Assinatura;
use Illuminate\Support\Str;

class AssinaturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = \App\Models\Assinatura::class;

    public function definition()
    {
        return [
            'qnt_caracteres'=> $this->faker->numerify(),
            'assinatura_default'=> $this->faker->name(),
            'qnt_de_uso'=> $this->faker->numerify()
            ];
    }
}
