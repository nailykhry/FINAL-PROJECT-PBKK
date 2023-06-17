<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Struk</title>
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
                <h1 class="fw-bold text-center">Struk</h1>
                <div class="card mt-5 mb-5 shadow" style="border: none">
                    <h5 class="card-header text-white" style="background-color: #c00003;">Struk</h5>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="kodetransaksi">Kode Transaksi</label>
                            <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" placeholder="Kode transaksi">
                        </div>
                        <div class="form-group mb-3">
                            <label for="totalbelanja">Total Belanja</label>
                            <input type="text" class="form-control" id="totalbelanja" name="totalbelanja" placeholder="Rp 0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="kodeitem">Metode Pembayaran</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih metode pembayaran</option>
                                <option value="1">Tunai</option>
                                <option value="2">Kartu</option>
                                <option value="3">E-money</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="nomor">Nomor Kartu/E-money (Jika pembayaran non-tunai)</label>
                            <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Nomor kartu/e-money">
                        </div>
                        <div class="form-group mb-3">
                            <label for="bayar">Bayar</label>
                            <input type="text" class="form-control" id="bayar" name="bayar" placeholder="Rp 0">
                        </div>
                        <div class="form-group mb-3">
                            <label for="kembalian">Kembalian</label>
                            <input type="text" class="form-control" id="kembalian" name="kembalian" placeholder="Rp 0">
                        </div>
                        <!-- Button Selesaikan Transaksi -->
                        <button class="btn" style="background-color: #FCD413">Selesaikan Transaksi</button>
                        <button class="btn mx-3" style="background-color: #ffeaed;">Kembali</button>   
                    </div>
                </div>
            </div>
        </form>
    </body>
</html>