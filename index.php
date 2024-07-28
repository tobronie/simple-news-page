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
        <title>Home</title>
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
        <header class="masthead" style="background-image: url('assets_/img/home-bg.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Home Nie Store</h1>
                            <span class="subheading">Memberikan Informasi seputar Style</span>
                            <span class="subheading">Jl. Joyo Suko No.14 C, Merjosari, Lowokwaru, kota Malang - Jawa Timur</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <!-- Post preview-->
                <?php
                        include 'koneksi.php';
                        $data = mysqli_query($koneksi, "SELECT * FROM cloting");
                        while ($d = mysqli_fetch_array($data)) {
                            $judul = $d['judul'];
                            $kategori = $d['kategori'];
                ?>
                <div class="col-md-10 col-lg-8 col-xl-7">

                        <div class="post-preview">
                            <a href="post.php?id=<?= $d["id"] ?>">
                                <!-- Judul Artikel -->
                                <h2 class="post-title"><?php echo $judul; ?></h2>
                                <!-- Kategori Artikel -->
                                <h3 class="post-subtitle"><?php echo $kategori; ?></h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="index.php">Nie Store</a>
                                | Kumpulan segala Berita dan Informasi
                            </p>
                        </div>
                        <!-- Divider/garis-->
                        <hr class="my-4" />
                    <?php
                    }
                    ?>

                </div>
            </div>
        </div>
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