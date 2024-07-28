<!DOCTYPE html>
<html>
<head>
    <title>Koneksi Database MySQL</title>
</head>
<body>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "Sederhana05#";
    $database = "nie";
    $koneksi = mysqli_connect($host, $username, $password, $database);

    if(mysqli_connect_errno()){
        echo "Koneksi Database gagal : ".mysqli_connect_errno();
    }
    ?>
</body>
</html>