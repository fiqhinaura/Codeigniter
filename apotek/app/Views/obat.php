<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .title {
            margin-top: 25px;
            /* Atur margin atas */
        }
    </style>
</head>

<body>
    <div class="container" margin-top: 20px>
        <h1 class="title">Daftar Obat</h1>
        <a href="<?= base_url('add_data_obat') ?>" class="btn btn-primary">+ Tambah Data Obat</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Obat</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Fungsi</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
            <tbody>
                <?php foreach ($all_data_obat as $obat) { ?>
                    <tr>
                        <td>
                            <?= $obat->id ?>
                        </td>
                        <td>
                            <?= $obat->nama_obat ?>
                        </td>
                        <td>
                            <?= $obat->jenis ?>
                        </td>
                        <td>
                            <?= $obat->fungsi ?>
                        </td>
                        <td>
                            <?= $obat->stock ?>
                        </td>
                        <td>
                            <a href="<?= base_url('edit_data_obat') . '/' . $obat->id ?>"
                                class="btn btn-warning btn-sm">Edit</a>
                            <a href="<?= base_url('hapus_data_obat') . '/' . $obat->id ?>"
                                class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>

            </tr>
            </tbody>
        </table>

        <br>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>