<?php
session_start();
include "koneksi.php";

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $psw = $_POST['password'];

    $sql = "SELECT * FROM pengguna WHERE email='$email' AND password='$psw'";
    $query = $koneksi->query($sql);

    if ($query->num_rows == 1) {
        $data = $query->fetch_array();
        $_SESSION['email'] = $data['email'];
            header("location: index.php");
    } else {
        echo '<script>alert("Email atau password salah");</script>';
        echo '<script>window.location.href = "javascript:history.back()";</script>';
        exit;
    }
}
?>