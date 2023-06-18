<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_barang',
        'jumlah_barang',
        'ppn',
        'pembayaran',
        'no_kartu',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'id_barang');
    }
}
