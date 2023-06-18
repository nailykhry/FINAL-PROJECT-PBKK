<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InventarisController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('inventaris', [
            'products' => $products,
        ]);
    }
}
