<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Products::count();
        $transactionCount = Transactions::count();
        $totalQuantity = Transactions::sum('jumlah_barang');
        return view('dashboard', [
            'productCount' => $productCount,
            'transactionCount' => $transactionCount,
            'selled' => $totalQuantity,
        ]);

    }
}
