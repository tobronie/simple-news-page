<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    mysqli_query($koneksi, "delete from pengguna WHERE id='$id'");

    header("location: tabel_pengguna.php");
?>