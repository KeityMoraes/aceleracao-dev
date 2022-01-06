<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(document $documento)
    {
        /*$documento->create(
            [
            'titulo'=>'Documento8',
            'tamanho_documento'=> '20',
            'numero_assinatura'=> '2',
            'assinatura_responsavel'=> 'Leo',
            'quantidade_pagina' => '11'
            ]
        );

        $documento->create(
            [
            'titulo'=>'Documento9',
            'tamanho_documento'=> '10',
            'numero_assinatura'=> '2',
            'assinatura_responsavel'=> 'Nara Lis',
            'quantidade_pagina' => '4'
            ]
        );

        $documento->create(
            [
            'titulo'=>'Documento10',
            'tamanho_documento'=> '18',
            'numero_assinatura'=> '2',
            'assinatura_responsavel'=> 'Jeferson Oliveira',
            'quantidade_pagina' => '11'
            ]
        );
        //*/
    }
}
