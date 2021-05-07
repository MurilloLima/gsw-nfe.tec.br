<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'cod',
        'qtd',
        'uni_medida',
        'valor',
        'descryption',
        'ncm',
    ];

    public function items()
    {
        return $this->hasMany(Item::class, 'product_id');
    }
}
