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

$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM cloting WHERE id=$id");
$d = mysqli_fetch_assoc($data);

$judul = $d['judul'];
$kategori = $d['kategori'];
$artikel = $d['artikel'];
$gambarSrc = "data:image/*;base64," . base64_encode($d['gambar']);

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Post</title>
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
        <!-- Post preview-->
        <header class="masthead" style="background-image: url('assets_/img/post-bg.jpeg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">

                            <!-- Judul Artikel -->
                            <h1><?php echo $judul; ?></h1>
                            <!-- Kategori Artikel -->
                            <h2 class="subheading"><?php echo $kategori; ?></h2>
                            <span class="meta">
                                Posted by
                                <a href="index.php">Nie Store</a>
                                | Kumpulan segala Berita dan Informasi
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <img src="<?php echo $gambarSrc; ?>" class="w-100 mt-3 mb-4 rounded-3" />
                    <p><?php echo $artikel; ?></p>

                    <!-- Divider/garis-->
                    <hr class="my-4" style="border-top: 2px solid black;" />

                    <h2 class="section-heading">Nie Store</h2>
                    <p>Nie Store adalah sebuah toko yang menawarkan berbagai macam pakaian trendy dan minuman kopi yang lezat. Di sini, Anda dapat menemukan koleksi terbaru pakaian dengan gaya yang up-to-date dan sesuai dengan tren terkini. Nie Store tidak hanya menyediakan pakaian untuk segala usia dan jenis kelamin, tetapi juga memberikan pilihan yang luas dalam hal minuman kopi yang disajikan. Dengan suasana yang nyaman dan ramah, Nie Store menjadi tempat yang sempurna untuk berbelanja pakaian favorit Anda sambil menikmati secangkir kopi yang segar.</p>
                </div>

                </div>
            </div>
        </article>
                            
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
