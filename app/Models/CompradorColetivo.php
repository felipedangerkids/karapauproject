<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompradorColetivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'nome',
        'telefone', 
        'telemovel_empresa',
        'email',
        'password',
        'nif',
        'contato',
        'telemovel',
        'tipo',
    ];
}
