<?php
include 'koneksi.php';

$id = $_POST['id'];
$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$artikel = $_POST['artikel'];

if ($_FILES['gambar']['name'] !== '') {
    $gambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
    $query = "UPDATE cloting SET judul='$judul', kategori='$kategori', artikel='$artikel', gambar='$gambar' WHERE id='$id'";
} else {
    $query = "UPDATE cloting SET judul='$judul', kategori='$kategori', artikel='$artikel' WHERE id='$id'";
}

mysqli_query($koneksi, $query);

header("location: tabel_cloting.php");
?>