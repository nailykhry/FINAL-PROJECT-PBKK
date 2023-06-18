<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Dashboard</title>
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
    <div class="container pt-2 shadow text-center"
        style="margin-left: 15%; width: 85%; height: 70px; background-color: #ffeaed; color: #c00003;">
        <h1 class="text-center fw-bold">Dashboard</h1>

        <!-- Mulai Transaksi -->
        <div style="margin-top: 100px;">
            <a class="btn btn-lg col-4" href="/transaksi" style="background-color: #c00003; color: white;">Mulai
                Transaksi</a>
        </div>

        <!-- Card -->
        <div class="card-group mt-5 mb-5">
            <div class="card p-5" style="background-color: #ffeaed;">
                <h1 style="color: #c00003;">{{$productCount}}</h1>
                <h5 class="card-title ">Jenis Barang</h5>
            </div>
            <div class="card p-5" style="background-color: #ffeaed;">
                <h1 style="color: #c00003;">{{$transactionCount}}</h1>
                <h5 class="card-title ">Transaksi</h5>
            </div>
            <div class="card p-5" style="background-color: #ffeaed;">
                <h1 style="color: #c00003;">{{$selled}}</h1>
                <h5 class="card-title ">Barang Terjual</h5>
            </div>
        </div>
    </div>
</body>

</html>