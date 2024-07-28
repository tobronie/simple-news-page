<?php
    include 'koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "UPDATE pengguna SET nama='$nama', email='$email', password='$password' WHERE id='$id'");

    header("location: tabel_pengguna.php");
?>