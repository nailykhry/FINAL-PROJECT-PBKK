<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nama_barang',
        'harga_beli_barang',
        'harga_jual_barang',
        'stock',
        'discount',
    ];

    public function transactions()
    {
        return $this->belongsToMany(Transaksi::class, 'detail_transactions', 'id', 'kode_transaksi')
            ->withPivot('jumlah_barang');
    }

}
