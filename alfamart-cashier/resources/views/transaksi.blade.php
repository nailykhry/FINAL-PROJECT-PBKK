<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Transaksi</title>
        <style>
            .active{
                background-color: #c00003;
                color: white;
                border: round;
            }
        </style>
    </head>
    <body>
        <!-- Side bar -->
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 280px; height: 100%; position: fixed; background-color: #ffeaed;">
            <a class="navbar-brand" href="#">
                <img src="logo_alfamart.png" alt="Logo Brand" width="40" height="40">
                <span class="navbar-text ml-2 fs-4 fw-bold" style="color: #c00003">Alfamart</span>
            </a>
            <hr>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link text-center" aria-current="page" style="color: #c00003;">Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a href="#" class="nav-link active text-center" aria-current="page" style="color: white;">Transaksi</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-dark text-decoration-none" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
            </a>
            </div>
        </div>
        <!-- End of Side bar -->

        <!-- Judul -->
        <form>
            <div class="container shadow px-5 ps-5 pt-2" style="margin-left: 280px; height: 70px; background-color: #ffeaed; color: #c00003;">
                <h1 class="fw-bold text-center">Transaksi</h1>

                <!-- Card -->
                <div class="row mt-5 w-100">
                    <!-- Card Pilih Item -->
                    <div class="card col">
                        <h5 class="card-header text-white" style="background-color: #c00003;">Pilih Item</h5>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <!-- kode transaksi dan nama transaksi auto fill -->
                                <div class="row">
                                    <div class="col form-group mb-3">
                                        <label for="kodetransaksi">Kode Transaksi</label>
                                        <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" placeholder="Kode transaksi">
                                    </div>
                                    <div class="col form-group mb-3">
                                        <label for="kodetransaksi">Kode Antrian</label>
                                        <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" placeholder="Kode antrian">
                                    </div>
                                </div>
                                <!-- Pilih nama item -->
                                <div class="col form-group mb-3">
                                    <label for="namaitem">Nama Item</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Item</option>
                                        <option value="1">Tissue 250s</option>
                                        <option value="2">Air Mineral 1,5L</option>
                                        <option value="3">Roti Tawar</option>
                                    </select>    
                                </div>
                                <!-- Harga Item & discount auto fill jika nama item sudah dipilih -->
                                <div class="col form-group mb-3">
                                    <label for="harga">Harga</label>
                                    <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                                </div>
                                <div class="col form-group mb-3">
                                    <label for="discount">Discount</label>
                                    <input type="text" class="form-control" id="discount" name="discount" placeholder="Discount">
                                </div>
                                <!-- Input jumlah item -->
                                <div class="col form-group mb-3">
                                    <label for="jumlahitem">Jumlah Item</label>
                                    <input type="text" class="form-control" id="jumlahitem" name="jumlahitem" placeholder="Jumlah Item">
                                </div>
                                <div class="col form-group mb-3">
                                    <label for="subtotal">Sub Total</label>
                                    <input type="text" class="form-control" id="subtotal" name="subtotal" placeholder="Sub Total">
                                </div>
                                <!-- Button Tambahkan ke Antrian -->
                                <button class="btn text-white" style="background-color: #c00003">Tambahkan ke Antrian</button>   
                            </div>
                        </div>
                    </div>
                    <!-- Card Antrian Item -->
                    <div class="card col w-75 mx-3 shadow" style="border: none;">
                        <h5 class="card-header text-white" style="background-color: #c00003;">Antrian Item</h5>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <!-- Button Tambahkan ke Antrian -->
                                <button class="btn text-white mb-3" style="background-color: #c00003">Tambahkan ke Antrian</button>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Kode Antrian</th>
                                        <th scope="col">Nama Barang</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Sub Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        </tr>
                                        <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>