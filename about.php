<?php
include 'koneksi.php';
session_start();
$username = $_SESSION['email'];
if (!isset($username)) {
  $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
  header('Location: login.php');
}

$safe_username = mysqli_real_escape_string($koneksi, $username);
$result = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE email='$safe_username'");
$pengguna = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>About</title>
        <link rel="icon" type="image/x-icon" href="assets_/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css_/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">Nie Store</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="about.php">About</a></li>
                        <?php
                            if ($_SESSION['email'] == 'tobronie05@gmail.com'):
                        ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="tabel_pengguna.php">Admin</a></li>;
                        <?php endif ?>
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="login.php">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url('assets_/img/about-bg.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>About Nie Store</h1>
                            <span class="subheading">Memberikan Informasi seputar Style</span>
                            <span class="subheading">Jl. Joyo Suko No.14 C, Merjosari, Lowokwaru, kota Malang - Jawa Timur</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p>Sejarah Nie Store dimulai pada tahun 2010 ketika pendirinya, John Nie, memiliki visi untuk membawa pakaian brand ternama ke masyarakat dengan cara yang lebih terjangkau. John Nie adalah seorang penggemar mode yang percaya bahwa pakaian berkualitas tinggi dan bergaya harus dapat diakses oleh semua orang, tanpa harus mengorbankan kualitas atau harga yang tinggi.</p>
                        <p>Pada awalnya, Nie Store adalah sebuah toko kecil di pinggiran kota yang menawarkan pakaian brand ternama dengan harga diskon. John Nie bekerja keras untuk menjalin hubungan dengan produsen dan distributor pakaian, sehingga ia dapat memperoleh stok pakaian berkualitas tinggi dengan harga yang lebih baik.</p>
                        <p>Dalam beberapa tahun, Nie Store berhasil menarik perhatian pelanggan yang mencari pakaian brand ternama dengan harga terjangkau. Keberhasilan ini memungkinkan John Nie untuk membuka toko baru di pusat perbelanjaan yang lebih besar, sehingga meningkatkan visibilitas dan jangkauan toko.</p>
                        <p>Pada tahun 2015, Nie Store mulai memperluas penawaran produknya dengan memasukkan koleksi pakaian lokal yang dirancang oleh desainer muda berbakat. Hal ini membantu mempromosikan bakat lokal sambil memberikan pelanggan pilihan yang lebih luas.</p>
                        <p>Seiring berjalannya waktu, Nie Store semakin dikenal sebagai destinasi utama untuk pakaian brand ternama dengan harga yang terjangkau. Toko ini juga mengembangkan kehadirannya secara online dengan meluncurkan situs web e-commerce, yang memungkinkan pelanggan dari seluruh dunia untuk mengakses produk-produk mereka.</p>
                        <p>Seiring dengan pakaian, pada tahun 2018 Nie Store juga memutuskan untuk memperluas bisnis mereka dengan memasukkan kategori minuman kopi. Mereka menyadari tren yang berkembang dalam budaya minum kopi dan ingin memberikan pengalaman yang menyenangkan bagi pelanggan mereka. Nie Store membuka kedai kopi di beberapa toko fisik mereka, menyajikan berbagai jenis minuman kopi dari biji kopi berkualitas tinggi.</p>
                        <p>Hingga hari ini, Nie Store tetap menjadi tujuan favorit bagi pecinta mode yang mencari pakaian brand ternama dengan harga terjangkau. Mereka juga terus mengembangkan dan menyempurnakan penawaran kopi mereka, menjadikan kedai kopi mereka sebagai tempat nongkrong yang populer bagi pecinta kopi lokal. Dengan komitmen mereka terhadap kualitas, gaya, dan harga yang terjangkau, Nie Store terus berkembang sebagai merek yang diandalkan dalam industri fashion dan minuman kopi.</p>
                    </div>
                </div>
            </div>
        </main>
        <!-- Footer-->
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Imam Tobroni - 210605110167</div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js_/scripts.js"></script>
    </body>
</html>
