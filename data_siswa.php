<?php

// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "root";
$password = "";
$database = "db_latihan";


$conn = mysqli_connect($servername, $username, $password, $database);

    // Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_siswa";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $nama_db = $baris['Nama_sisa'];
    $alamat_db = $baris['Alamat'];
    $jenis_db= $baris['Jenis_kelamin'];

    echo $nama_db;
    echo $alamat_db;
    echo $jenis_db;
    break;

}

// ?>