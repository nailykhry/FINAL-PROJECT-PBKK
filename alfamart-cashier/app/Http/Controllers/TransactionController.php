<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Transactions;
use Illuminate\Http\Request;
use App\Models\Detail_transactions;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function index()
    {
        $transactionMax = Transactions::max('id');
        $products = Products::all();
        return view('transaksi', [
            'newTransactionId' => $transactionMax + 1,
            'products' => $products,
        ]);
    }

    public function pembayaran(Request $request)
    {
        $tableData = json_decode($request->input('tableData'), true);
        $totalBelanja = $request->input('totalBelanja');

        $transaction = new Transactions();
        $transaction->ppn = 0;
        $transaction->total = $totalBelanja;
        $transaction->pembayaran = 0;
        $transaction->no_kartu = 0;
        $transaction->status = "Belum bayar";
        $transaction->save(); 
        $transactionId = $transaction->getKey();

        foreach ($tableData as $rowData) {
            $detail = new Detail_transactions();
            $detail->kode_transaksi = $transactionId;
            $detail->kode_barang = $rowData['kodeItem'];
            $detail->jumlah_barang = $rowData['jumlah'];
            $detail->save();
        }    

        return response()->json(['message' => $tableData[0]['kodeItem']]);
    }


    public function payment()
    {
        $transaction = Transactions::latest()->first();
        
        return view('pembayaran', [
            'transaction' => $transaction,
        ]);
    }

    public function update(Request $request)
    {
        $transaction = Transactions::latest()->first();
        $metode = $request->metodepembayaran;
        $kembalian = 0;
        $no_kartu = 0;
        $bayar = 0;

        if($metode=='tunai'){
            $kembalian = $request->kembalian;
            $bayar = $request->bayar;
        }else{
            $no_kartu = $request->nomorkartu;
            $bayar = $transaction['total'];
        }

        $transaction->pembayaran = $metode;
        $transaction->no_kartu = $no_kartu;
        $transaction->status = "Bayar";
        $transaction->save();


        // AMBIL DETAIL BARANG
        $transactionFind = Transactions::findOrFail($transaction->id);
        $purchasedProducts = $transactionFind->products;

        return view('struk', [
            'transaction' => $transaction,
            'kembalian' => $kembalian,
            'bayar' => $bayar,
            'products' => $purchasedProducts,
        ]);

    }


}
