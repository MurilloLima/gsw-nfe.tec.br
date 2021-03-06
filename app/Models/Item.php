<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'client_id',
        'product_id',
        'name',
        'ncm',
        'uni_medida',
        'valor',
        'qtd',
        'descryption'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
        # code...
    }
}
