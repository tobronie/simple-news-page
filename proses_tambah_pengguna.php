<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($koneksi, "insert into pengguna (nama, email, password) values ('$nama', '$email', '$password')");

    header("location: tabel_pengguna.php");
?>