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
        <div class="d-flex flex-column flex-shrink-0 p-3" style="width: 15%; height: 100%; position: fixed; background-color: #ffeaed;">
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
            <div class="container shadow px-5 ps-5 pt-2" style="margin-left: 15%; width: 85%; height: 70px; background-color: #ffeaed; color: #c00003;">
                <h1 class="fw-bold text-center">Transaksi</h1>

                <!-- Card -->
                <div class="row mt-5 w-100">
                    <!-- Card Pilih Item -->
                    <div class="card col-4 mx-3 shadow" style="border: none;">
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
                                <!-- Button Pilih Item -->
                                <button class="btn mb-2 w-100" style="background-color: #FCD413">Pilih Item</button> 
                                <!-- Pilih nama item -->
                                <div class="col form-group mb-3">
                                    <label for="kodeitem">Kode Item</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih kode item</option>
                                        <option value="1">kode 1</option>
                                        <option value="2">kode 2</option>
                                        <option value="3">kode 3</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                    <label for="namaitem">Nama Item</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih nama item</option>
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
                                    <label for="subtotal" class="fw-bold">Sub Total</label>
                                    <input type="text" class="form-control" id="subtotal" name="subtotal" placeholder="Sub Total">
                                </div>
                                <!-- Button Tambahkan ke Antrian -->
                                <button class="btn w-100" style="background-color: #FCD413">Tambahkan ke Antrian</button>   
                            </div>
                        </div>
                    </div>
                    <!-- Card Antrian Item -->
                    <div class="card col shadow" style="border: none;">
                        <h5 class="card-header text-white" style="background-color: #c00003;">Antrian Item</h5>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <!-- Button Tambahkan ke Antrian -->
                                <button class="btn mb-3" style="background-color: #FCD413">Lanjut ke Pembayaran</button>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Kode Antrian</th>
                                        <th scope="col">Nama Item</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">kode antrian 1</td>
                                            <td>nama item 1</td>
                                            <td>1</td>
                                            <td>Rp 0</td>
                                            <td>
                                                <button class="btn text-white" style="background-color: #c00003">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">kode antrian 2</td>
                                            <td>nama item 2</td>
                                            <td>2</td>
                                            <td>Rp 0</td>
                                            <td>
                                                <button class="btn text-white" style="background-color: #c00003">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                                    </svg>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row" colspan="3">Total Belanja</th>
                                            <th colspan="2">Rp 0</th>
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