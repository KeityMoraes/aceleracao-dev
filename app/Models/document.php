<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class document extends Model
{
    use HasFactory;

    protected $table = 'documents';
    protected $fillable = ['titulo','tamanho_documento','numero_assinatura','assinatura_responsavel','quantidade_pagina'];

}
