<?php

namespace App\Models;

use App\Models\Products;
use App\Models\Detail_transactions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'ppn',
        'pembayaran',
        'no_kartu',
    ];

    public function products()
    {
        return $this->belongsToMany(Products::class, 'detail_transactions', 'kode_transaksi', 'kode_barang')
            ->withPivot('jumlah_barang')
            ->withTimestamps();
    }


}
