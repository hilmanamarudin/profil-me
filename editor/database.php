<?php
    $host = 'localhost';
    $user = 'root'; // Ganti dengan username MySQL Anda
    $pass = ''; // Ganti dengan password MySQL Anda
    $dbname = 'h';

    $conn = new mysqli($host, $user, $pass, $dbname);

    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }
?>
