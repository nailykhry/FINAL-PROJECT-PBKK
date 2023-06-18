<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Pembayaran</title>
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

    <!-- Judul -->
    <form action="update-transaction" method="POST">
        @csrf
        <div class="container shadow px-5 ps-5 pt-2"
            style="margin-left: 15%; width: 85%; height: 70px; background-color: #ffeaed; color: #c00003;">
            <h1 class="fw-bold text-center">Pembayaran</h1>
            <div class="card mt-5 mb-5 shadow" style="border: none">
                <h5 class="card-header text-white" style="background-color: #c00003;">Pembayaran</h5>
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="kodetransaksi">Kode Transaksi</label>
                        <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi"
                            value="ALF00{{$transaction['id']}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="totalbelanja">Total Belanja</label>
                        <input type="text" class="form-control" id="totalbelanja" name="totalbelanja"
                            value="Rp {{$transaction['total']}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kodeitem">Metode Pembayaran</label>
                        <select class="form-select" aria-label="Default select example" name="metodepembayaran">
                            <option selected>Pilih metode pembayaran</option>
                            <option value="tunai">Tunai</option>
                            <option value="kartu">Kartu</option>
                            <option value="emoney">E-money</option>
                        </select>
                    </div>
                    <div class="form-group mb-3">
                        <label for="nomor">Nomor Kartu/E-money (Jika pembayaran non-tunai)</label>
                        <input type="text" class="form-control" id="nomorkartu" name="nomorkartu"
                            placeholder="Nomor kartu/e-money">
                    </div>
                    <div class="form-group mb-3">
                        <label for="bayar">Bayar</label>
                        <input type="text" class="form-control" id="bayar" name="bayar" placeholder="Rp 0">
                    </div>
                    <div class="form-group mb-3">
                        <label for="kembalian">Kembalian</label>
                        <input type="text" class="form-control" id="kembalian" name="kembalian" value="Rp 0" readonly>
                    </div>
                    <!-- Button Selesaikan Transaksi -->
                    <button class="btn btn-outline-danger mx-3" id="btnCekKembalian">Cek Kembalian</button>
                    <button type="submit" class="btn btn-warning">Selesaikan Transaksi</button>
                </div>
            </div>
        </div>
    </form>

    <script>
        document.getElementById("btnCekKembalian").addEventListener("click", function() {
            event.preventDefault(); 
            var totalBelanja = document.getElementById("totalbelanja").value;
            var bayar = document.getElementById("bayar").value;
            var totalBelanja = parseFloat(totalBelanja.replace(/[^\d.-]/g, ""));
            var bayar = parseFloat(bayar.replace(/[^\d.-]/g, ""));
            var kembalian = bayar - totalBelanja; 
            
            document.getElementById("kembalian").value = 'Rp ' + kembalian;
        });
    </script>


</body>

</html>