<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3">Data Artikel</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                        <div class="sb-sidenav-menu-heading">Dashboard</div>
                            <a class="nav-link collapsed" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Data
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="tabel_pengguna.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                        Data Pengguna
                                    </a>
                                    <a class="nav-link" href="tabel_cloting.php">
                                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                        Data Cloting 
                                    </a>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Selamat Datang :</div>
                        Imam Tobroni
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Tambah Data Cloting</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Tambahkan Data yang Valid</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-tachometer-alt"></i>
                                Input Data Cloting
                            </div>
                            <div class="card-body">
                                <form enctype="multipart/form-data" method="POST" action="proses_tambah_cloting.php">
                                    <div class="mb-3">
                                        <label for="exampleInputJudul1" class="form-label">Judul Artikel</label>
                                        <input required type="judul" name="judul" class="form-control" placeholder="Masukkan Judul Artikel yang Valid" id="exampleInputjudul1" aria-label="judulHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputkategori1" class="form-label">Kategori</label>
                                        <input required type="kategori" name="kategori" class="form-control" placeholder="Masukkan Kategori yang Valid" id="exampleInputkategori1" aria-label="kategoriHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputArtikel1" class="form-label">Isi Artikel</label>
                                        <input required type="artikel" name="artikel" class="form-control" placeholder="Masukkan Isi Artikel yang Valid" id="exampleInputartikel1" aria-label="artikelHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputGambar1" class="form-label">Gambar</label>
                                        <input required type="file" name="gambar" class="form-control" id="exampleInputGambar1" accept="image/*">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input required type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <i>Nie.Store</i></div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
