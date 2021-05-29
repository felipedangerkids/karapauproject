<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;


    protected $fillable = [
        
        'pescador_id',
        'especie_id',
        'porto_id',
        'embarcacao',
        'zona',
        'tamanho',
        'quantidade_kg',
        'quantidade_unidade',
        'arte',
        'preco',
        'unidade',
        'kg',
        'image',
        'status'

    ];

    public function especies()
    {
        return $this->belongsTo(Especie::class, 'especie_id');
    }
    public function portos()
    {
        return $this->belongsTo(Porto::class, 'porto_id');
    }
    
}
