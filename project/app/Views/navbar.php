<!doctype html>
<html lang="en">



<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <!-- //URL HELPER -->
            <a class="navbar-brand" href="<?= url_to('Home::index') ?>">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= url_to('Home::buku') ?>">Buku</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= url_to('Home::penerbit') ?>">Penerbit</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <br>
                    <br>
                    <!-- DATE HELPER -->
                    <h1>Helper URL button : </h1>
                    <br>
                    <a href="" <?= url_to('Home::penerbit') ?>" role="button">Penerbit</a>
                    <?php
                    echo "<br>helper date : ";
                    helper('date');
                    echo now();
                    $today = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
                    
                    echo $today;

                    echo "<br>helper teks random : ";
                    helper('text');
                    echo random_string('alnum', 16);

                    echo "<br>helper text reduce double slash : ";
                    $string = 'http://example.com//index.php';
                    echo reduce_double_slashes($string); // results in "http://example.com/index.php"
                    echo "<br>";
                    echo "23 : ";
                    helper('number');
                    echo number_to_roman(23);    // Returns XXIII
                    echo "<br>";
                    echo "324 : ";
                    echo number_to_roman(324);   // Returns CCCXXIV
                    echo "<br>";
                    echo "2534 : ";
                    echo number_to_roman(2534);  // Returns MMDXXXIV
                    ?>
                </form>
            </div>
        </div>
    </nav>

</body>

</html>