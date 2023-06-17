<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_beli_barang',
        'harga_jual_barang',
        'stock',
        'discount',
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'id_barang');
    }

}
