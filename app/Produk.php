<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    public function menu()
    {
    return $this->belongsTo(Menu::class,
    'menu_id', 'id');
    }

    public function pesanan_details()
    {
    return $this->hasMany(PesananDetail::class,
    'produk_id', 'id');
    }
}
