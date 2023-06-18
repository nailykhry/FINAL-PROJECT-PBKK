<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Transaksi</title>
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
            <li class="nav-item">
                <a href="/dashboard" class="nav-link text-center" aria-current="page"
                    style="color: #c00003;">Dashboard</a>
            </li>
            <li class="nav-item active">
                <a href="/transaksi" class="nav-link active text-center" aria-current="page"
                    style="color: white;">Transaksi</a>
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

    <div class="container shadow px-5 ps-5 pt-2"
        style="margin-left: 15%; width: 85%; height: 70px; background-color: #ffeaed; color: #c00003;">
        <h1 class="fw-bold text-center">Transaksi</h1>

        <div id="next"></div>

        <!-- Card -->
        <div class="row mt-5 w-100">
            <!-- Card Pilih Item -->
            <form id=transaksi>
                <div class="card col-4 mx-3 shadow" style="border: none;">
                    <h5 class="card-header text-white" style="background-color: #c00003;">Pilih Item</h5>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <!-- kode transaksi dan nama transaksi auto fill -->
                            <div class="col form-group mb-3">
                                <label for="kodetransaksi">Kode Transaksi</label>
                                <input type="text" class="form-control" id="kodetransaksi" name="kodetransaksi"
                                    value="ALF00{{$newTransactionId}}" readonly>
                            </div>

                            <!-- Pilih nama item -->
                            <div class="col form-group mb-3">
                                <label for="kodeitem">Kode Item</label>
                                <input type="text" class="form-control" id="kodeitem" name="kodeitem"
                                    placeholder="Masukkan kode item">
                            </div>
                            <div class="col form-group mb-3">
                                <label for="namaitem">Nama Item</label>
                                <select class="form-select" aria-label="Default select example" id="namaitem">
                                    <option selected>Pilih nama item</option>
                                    @foreach ( $products as $product)
                                    <option value="{{$product['id']}}">{{$product['nama_barang']}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Button Pilih Item -->
                            <button class="btn btn-warning mb-2 w-100" id="searchButton">Cari Item</button>

                            <!-- Harga Item & discount auto fill jika nama item sudah dipilih -->
                            <div class="col form-group mb-3">
                                <label for="harga">Harga</label>
                                <input type="text" class="form-control" id="harga" name="harga" placeholder="Harga">
                            </div>
                            <div class="col form-group mb-3">
                                <label for="discount">Discount</label>
                                <input type="text" class="form-control" id="discount" name="discount"
                                    placeholder="Discount">
                            </div>
                            <!-- Input jumlah item -->
                            <div class="col form-group mb-3">
                                <label for="jumlahitem">Jumlah Item</label>
                                <input type="text" class="form-control" id="jumlahitem" name="jumlahitem"
                                    placeholder="Jumlah Item" required>
                            </div>
                            <!-- Button Tambahkan ke Antrian -->
                            <button class="btn btn-warning w-100" type="submit">Tambahkan ke Antrian</button>
                        </div>
                    </div>
                </div>
            </form>

            <form>
                @csrf
                <!-- Card Antrian Item -->
                <div class="card col shadow mt-5" style="border: none;">
                    <h5 class="card-header text-white" style="background-color: #c00003;">Antrian Item</h5>
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <!-- Button Lanjut ke Pembayaran -->
                            <button type="submit" class="btn btn-warning mb-3" id="btn-pembayaran">Lanjut ke
                                Pembayaran</button>
                            <table class="table table-bordered table-striped" id="tableData">
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
            </form>
        </div>
    </div>


    {{-- UNTUK PENCARIAN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const searchButton = document.getElementById('searchButton');

        searchButton.addEventListener('click', function() {
            event.preventDefault(); 
            let kodeitemValue = document.getElementById('kodeitem').value;

            if (!kodeitemValue) {
                const namaitem = document.getElementById('namaitem');
                const selectedOptionNama = namaitem.options[namaitem.selectedIndex];
                const selectedValueNama = selectedOptionNama.value;
                kodeitemValue = selectedValueNama;
            }
            

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            
            $.ajax({
                url: '/search-product',
                type: 'POST',
                dataType: 'json',
                data: {
                    kodeitem: kodeitemValue
                },
                success: function(response) {
                    document.getElementById('harga').value = response.harga;
                    document.getElementById('discount').value = response.discount;
                    document.getElementById('kodeitem').value = response.kode_barang;
                    const namaitemResponse = document.getElementById('namaitem');
                    const options = namaitemResponse.options;

                    let selectedOption = null;
                    for (let i = 0; i < options.length; i++) {
                        if (options[i].textContent === response.nama_barang) {
                            selectedOption = options[i];
                            break;
                        }
                    }

                    if (selectedOption) {
                        selectedOption.selected = true;
                        namaitemResponse.value = selectedOption.value;
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });

    </script>


    <script>
        // Ambil elemen formulir dan hasil
        const form = document.getElementById('transaksi');
        let kodeitem = document.getElementById('kodeitem');
        const namaitem = document.getElementById('namaitem');
        const harga = document.getElementById('harga');
        const discount = document.getElementById('discount');
        const jumlahitem = document.getElementById('jumlahitem');
        const hasilTransaksi = document.getElementById('hasilTransaksi');
        const totalBelanja = document.getElementById('totalBelanja');

        // Tambahkan event listener untuk saat formulir dikirim
        form.addEventListener('submit', function(event) {
            event.preventDefault(); 

            const kodeitemValue = kodeitem.value;
            const selectedOptionNama = namaitem.options[namaitem.selectedIndex];
            const namaitemValue = selectedOptionNama.text;
            const hargaValue = harga.value;
            const discountValue = discount.value;
            const jumlahitemValue = jumlahitem.value;
            const subtotalValue = (hargaValue - discountValue) * jumlahitemValue;

            // Tambahkan hasil transaksi ke dalam tabel
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
            <tr>
                <td name="kodeItem">${kodeitemValue}</td>
                <td name="namaItem">${namaitemValue}</td>
                <td name="jumlah">${jumlahitemValue}</td>
                <td name="subTotal">${subtotalValue}</td>
                <td>
                    <button class="btn btn-danger delete-row">Hapus</button>
                </td>
            </tr>
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
            kodeitem.value = '';
            namaitem.selectedIndex = 0;
            harga.value = '';
            discount.value = '';
            jumlahitem.value = '';
        });
    </script>

    <script>
        $('#btn-pembayaran').click(function(event) {
            event.preventDefault(); 

            var tableData = [];

            $('#tableData tbody tr').each(function() {
                var rowData = {
                    kodeItem: $(this).find('td:eq(0)').text(),
                    namaItem: $(this).find('td:eq(1)').text(),
                    jumlah: $(this).find('td:eq(2)').text(),
                    subTotal: $(this).find('td:eq(3)').text()
                };
                tableData.push(rowData);
            });

            var totalBelanja = $('#totalBelanja').text();
            var totalAngka = parseInt(totalBelanja.split(' ')[1]);
        
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                
                $.ajax({
                    url: '/pembayaran',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        tableData: JSON.stringify(tableData),
                        totalBelanja: totalAngka
                    },
                    success: function(response) {
                        // Membuat elemen tombol
                        var button = document.createElement("button");
                        button.innerHTML = "Klik Saya"; 

                        // Menambahkan gaya pada tombol
                        button.style.backgroundColor = "blue";
                        button.style.color = "white";
                        button.style.padding = "10px 20px";
                        button.style.border = "none";
                        button.style.cursor = "pointer";

                        // Menambahkan atribut href ke tombol
                        button.setAttribute("href", "/halaman-pembayaran");

                        // Menambahkan tombol ke dalam elemen dengan ID "next"
                        var container = document.getElementById("next");
                        container.appendChild(button);

                        button.addEventListener("click", function() {
                        window.location.href = "/halaman-pembayaran";
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log("error");
                    }
                });
        });

    </script>

</body>

</html>