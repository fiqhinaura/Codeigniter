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
    <div class="container">
        <h1 class="title">Tambah Data Obat</h1>
        <form action="<?= base_url('proses_add_obat') ?>" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">ID Obat</label>
                <input type="text" class="form-control" id="id" name="id">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama_obat" name="nama_obat">
            </div>
            <div class="mb-3">
                <select class="form-select" name="jenis" id="jenis">Jenis
                    <option value="Kapsul">Kapsul</option>
                    <option value="Tablet">Tablet</option>
                    <option value="Sirup">Sirup</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fungsi</label>
                <textarea class="form-control" id="fungsi" name="fungsi" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>