<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Assinatura;

class AssinaturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Assinatura $assinaturas)
    {
        $assinaturas->create(
            [
            'qnt_caracteres'=>'30',
            'assinatura_default'=> 'Marcelinho Acevedo',
            'qnt_de_uso'=> '2'
            ]
        );
    }
}
