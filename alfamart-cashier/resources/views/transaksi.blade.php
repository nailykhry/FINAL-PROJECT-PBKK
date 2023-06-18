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
                <li class="nav-item">
                    <a href="#" class="nav-link text-center" aria-current="page" style="color: #c00003;">Inventaris</a>
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
        <form id=transaksi>
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
                                <div class="col form-group mb-3">
                                        <label for="kodetransaksi">Kode Transaksi</label>
                                        <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi" placeholder="Kode transaksi">
                                    </div>
                                <!-- Button Pilih Item -->
                                <button class="btn btn-warning mb-2 w-100">Pilih Item</button> 
                                <!-- Pilih nama item -->
                                <div class="col form-group mb-3">
                                    <label for="kodeitem">Kode Item</label>
                                    <select class="form-select" aria-label="Default select example" id="kodeitem">
                                        <option selected>Pilih kode item</option>
                                        <option value="1">kode 1</option>
                                        <option value="2">kode 2</option>
                                        <option value="3">kode 3</option>
                                    </select>
                                </div>
                                <div class="col form-group mb-3">
                                    <label for="namaitem">Nama Item</label>
                                    <select class="form-select" aria-label="Default select example" id="namaitem">
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
                                <!-- Button Tambahkan ke Antrian -->
                                <button class="btn btn-warning w-100" type="submit">Tambahkan ke Antrian</button>   
                            </div>
                        </div>
                    </div>
                    <!-- Card Antrian Item -->
                    <div class="card col shadow" style="border: none;">
                        <h5 class="card-header text-white" style="background-color: #c00003;">Antrian Item</h5>
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <!-- Button Lanjut ke Pembayaran -->
                                <button class="btn btn-warning mb-3">Lanjut ke Pembayaran</button>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                        <th scope="col">Kode Item</th>
                                        <th scope="col">Nama Item</th>
                                        <th scope="col">Jumlah</th>
                                        <th scope="col">Sub Total</th>
                                        <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="hasilTransaksi">
                                        <!-- Hasil transaksi akan ditambahkan di sini -->
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <th scope="row" colspan="3">Total Belanja</th>
                                        <td colspan="2" id="totalBelanja"></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script>
            // Ambil elemen formulir dan hasil
            const form = document.getElementById('transaksi');
            const namaitem = document.getElementById('namaitem');
            const kodeitem = document.getElementById('kodeitem');
            const harga = document.getElementById('harga');
            const discount = document.getElementById('discount');
            const jumlahitem = document.getElementById('jumlahitem');
            const hasilTransaksi = document.getElementById('hasilTransaksi');
            const totalBelanja = document.getElementById('totalBelanja');

            // Tambahkan event listener untuk saat formulir dikirim
            form.addEventListener('submit', function(event) {
                event.preventDefault(); // Mencegah pengiriman formulir

                // Ambil nilai input kodeitem
                const selectedOption = kodeitem.options[kodeitem.selectedIndex];
                const kodeitemValue = selectedOption.text;

                // Ambil nilai input namaitem
                const selectedOptionNama = namaitem.options[namaitem.selectedIndex];
                const namaitemValue = selectedOptionNama.text;

                // Ambil nilai input harga
                const hargaValue = harga.value;

                // Ambil nilai input discount
                const discountValue = discount.value;

                // Ambil nilai input jumlahitem
                const jumlahitemValue = jumlahitem.value;

                // Hitung subtotal
                const subtotalValue = (hargaValue - discountValue) * jumlahitemValue;

                // Tambahkan hasil transaksi ke dalam tabel
                const newRow = document.createElement('tr');
                newRow.innerHTML = `
                <td>${kodeitemValue}</td>
                <td>${namaitemValue}</td>
                <td>${jumlahitemValue}</td>
                <td>${subtotalValue}</td>
                <td>
                    <button class="btn btn-danger delete-row">Hapus</button>
                </td>
                `;

                // Tambahkan event listener untuk saat tombol "Hapus" di klik
                const deleteButton = newRow.querySelector('.delete-row');
                deleteButton.addEventListener('click', function() {
                newRow.remove(); // Hapus baris dari tabel

                // Hitung total belanja
                let total = 0;
                const subtotalElements = hasilTransaksi.querySelectorAll('td:nth-child(4)');
                subtotalElements.forEach(element => {
                    total += parseInt(element.textContent);
                });

                // Tampilkan total belanja
                totalBelanja.textContent = 'Rp ' + total;
                });

                hasilTransaksi.appendChild(newRow);

                // Hitung total belanja
                let total = 0;
                const subtotalElements = hasilTransaksi.querySelectorAll('td:nth-child(4)');
                subtotalElements.forEach(element => {
                total += parseInt(element.textContent);
                });

                // Tampilkan total belanja
                totalBelanja.textContent = 'Rp ' + total;

                // Reset nilai input setelah ditambahkan ke tabel
                kodeitem.selectedIndex = 0;
                namaitem.selectedIndex = 0;
                harga.value = '';
                discount.value = '';
                jumlahitem.value = '';
            });
        </script>

    </body>
</html>