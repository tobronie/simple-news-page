<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$artikel = $_POST['artikel'];
$gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));

mysqli_query($koneksi, "INSERT INTO cloting (judul, kategori, artikel, gambar) VALUES ('$judul', '$kategori', '$artikel', '$gambar')");

header("location: tabel_cloting.php");
?>
