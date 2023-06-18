<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Detail_transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_transaksi',
        'kode_barang',
        'jumlah_barang',
    ];

}
