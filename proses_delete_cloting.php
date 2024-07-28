<?php
    include 'koneksi.php';

    $id = $_GET['id'];

    mysqli_query($koneksi, "delete from cloting WHERE id='$id'");

    header("location: tabel_cloting.php");
?>