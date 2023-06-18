<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Struk</title>
    <style>
        .active {
            background-color: #c00003;
            color: white;
            border: round;
        }
    </style>
</head>

<body>
    <!-- Side bar -->
    <div class="d-flex flex-column flex-shrink-0 p-3"
        style="width: 15%; height: 100%; position: fixed; background-color: #ffeaed;">
        <a class="navbar-brand" href="#">
            <img src="logo_alfamart.png" alt="Logo Brand" width="40" height="40">
            <span class="navbar-text ml-2 fs-4 fw-bold" style="color: #c00003">Alfamart</span>
        </a>
        <hr>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item active">
                <a href="/dashboard" class="nav-link active text-center" aria-current="page"
                    style="color: white;">Dashboard</a>
            </li>
            <li class="nav-item">
                <a href="/transaksi" class="nav-link text-center" aria-current="page"
                    style="color: #c00003;">Transaksi</a>
            </li>
            <li class="nav-item">
                <a href="/inventaris" class="nav-link text-center" aria-current="page"
                    style="color: #c00003;">Inventaris</a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none" id="dropdownUser2"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
        </div>
    </div>
    <!-- End of Side bar -->

    <!-- Form -->
    <form>
        <div class="container shadow px-5 ps-5 pt-2"
            style="margin-left: 15%; width: 85%; height: 70px; background-color: #ffeaed; color: #c00003;">
            <h1 class="fw-bold text-center">Struk</h1>
            <div class="card mt-5 mb-5 shadow" style="border: none">
                <h5 class="card-header text-white" style="background-color: #c00003;">Struk</h5>
                <div class="card-body">
                    <div class="row">
                        <p class="col card-title fw-bold">Kode Transaksi: ALF00{{$transaction['id']}}</p>
                        <p class="col card-title fw-bold">Tanggal: 17-06-2023</p>
                    </div>

                    <div class="form-group mb-3">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Kode Item</th>
                                    <th scope="col">Nama Item</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Discount</th>
                                    <th scope="col">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $total_item = 0;
                                $total_discount = 0; ?>

                                @foreach ($products as $product)
                                <tr>
                                    <?php $total_item =  $total_item + $product->pivot->jumlah_barang;
                                    $total_discount = $total_discount + ($product['harga_jual_barang']*$product['discount']) ?>

                                    <td scope="row">{{$product['id']}}</td>
                                    <td>{{$product['nama_barang']}}r</td>
                                    <td>{{$product->pivot->jumlah_barang}}</td>
                                    <td>Rp {{$product['harga_jual_barang']}}</td>
                                    <td>Rp
                                        {{$product['harga_jual_barang']*$product['discount']}}
                                    </td>
                                    <td>Rp {{($product['harga_jual_barang'] - ($product['harga_jual_barang'] *
                                        $product['discount'])) * $product->pivot->jumlah_barang }}</td>
                                </tr>
                                @endforeach

                                <tr>
                                    <th scope="row" colspan="3">Total item</th>
                                    <td colspan="3">{{$total_item}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Total Discount</th>
                                    <td colspan="3">Rp {{ $total_discount}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Total Belanja</th>
                                    <th colspan="3">Rp {{$transaction['total']}}</th>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">{{$transaction['pembayaran']}}</th>
                                    <td colspan="3">Rp {{$bayar}}</td>
                                </tr>
                                <tr>
                                    <th scope="row" colspan="3">Kembalian</th>
                                    <td colspan="3">Rp {{$kembalian}}</td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- Button Selesaikan Transaksi -->
                        <button class="btn btn-warning">Cetak Struk</button>
                        <button class="btn btn-outline-danger mx-3">Kembali</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>