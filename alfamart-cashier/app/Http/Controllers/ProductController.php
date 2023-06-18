<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function search(Request $request)
    {
        $kodeitem = $request->input('kodeitem');
        $product = Products::where('id', $kodeitem)->first();
        if ($product){
            $response = [
                'harga' => $product['harga_jual_barang'],
                'discount' => $product['harga_jual_barang'] * $product['discount'],
                'kode_barang' => $kodeitem,
                'nama_barang' => $product['nama_barang'],
            ];
            return response()->json($response);
        }else{
            $response = [
                'harga' => "null",
                'discount' => "null",
                'kode_barang' => $kodeitem,
                'nama_barang' => "null",
            ];
            return response()->json($response);
        }
    }
}
