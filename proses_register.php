<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$no_hp = $_POST['no_hp'];
$psw = $_POST['password'];

$sql = "INSERT INTO pengguna (nama, email, no_hp, password) VALUES ('$nama', '$email', '$no_hp', '$psw')";
$query = $koneksi->query($sql);

if ($query === true) {
    header('location: login.php');
} else {
    echo '<script>alert("Data Tidak Valid");</script>';
    echo '<script>window.location.href = "javascript:history.back()";</script>';
    exit;
}
?>