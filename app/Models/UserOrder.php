<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'adress',
        'payment_mothod',
        'shipping_mothod',
        'user_id',
        'status',
        'user_name',
        'email',
        'telemovel'
    ];

    public function enderecos()
    {
        return $this->belongsTo(AdressBuyer::class, 'adress');
    }
}
