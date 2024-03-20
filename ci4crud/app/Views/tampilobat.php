<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .container {
            max-width: 800px;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- CONTAINER -->
    <div class="container">
        <!-- card -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                Data Obat
            </div>
            <div class="card-body">
                <!-- lokasi teks pencarian -->
                <form action="" method="get">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name='katakunci' placeholder="Masukkan Kata Kunci"
                            aria-label="Masukkan Kata Kunci" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Cari</button>
                    </div>
                </form>

                <!-- modal -->
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    + Tambah Data Obat
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Form Obat</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <!-- form input data -->
                            <div class="modal-body">
                                <div class="mb-3 row">
                                    <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputNama">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3 row">
                                    <label for="inputJenis" class="col-sm-2 col-form-label">Jenis</label>
                                    <div class="col-sm-10">
                                        <select id="inputJenis" class="form-select">
                                            <option value="sirup">Sirup</option>
                                            <option value="tablet">Tablet</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3 row">
                                    <label for="inputFungsi" class="col-sm-2 col-form-label">Fungsi</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputFungsi" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3 row">
                                    <label for="inputStock" class="col-sm-2 col-form-label">Stock</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputStock">
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="button" class="btn btn-primary" id="tombolSimpan">Simpan</button>

                            </div>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Fungsi</th>
                            <th>Stock</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Nama</td>
                            <td>Jenis</td>
                            <td>Fungsi</td>
                            <td>Stock</td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- SCRIPT JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $('#tombolSimpan').on('click', function () {
            // alert('Berhasil')
            var $nama = $("#inputNama").val();
            var $jenis = $("#inputJenis").val();
            var $fungsi = $("#inputFungsi").val();
            var $stock = $("#inputStock").val();

            $.ajax({
                url: "<?php echo site_url("/obat/simpan") ?>",
                type: "POST",
                success: function (hasil) {
                    alert(hasil);
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
                
            })
        });
    </script> -->
</body>

</html>