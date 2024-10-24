<?php

$id_fr      = $_GET['id_barang'];
$nama_fr    = $_GET['nama_barang'];
$harga_fr   = $_GET['harga'];
$stok_fr    = $_GET['stok'];

// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "root";
$password = "";
$database = "tugas_database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_barang";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $id_db      = $baris['id_barang'];
    $nama_db    = $baris['nama_barang'];
    $harga_db   = $baris['harga'];
    $stok_db    = $baris['stok'];

    if ($nama_db == $nama_fr){
        if ($stok_db <= $stok_fr){
            $status ="Pembelian barang berhasil diinput";
        }else{
            $status ="Stok barang tidak mencukupi";
        }
    }else{
        $status = "Kesalahan input mohon periksa ulang";
    }

    }



$response = [
    'nama'      => $nama_db,
    'stok'      => $stok_db,
    'status'    => $status,
];
echo json_encode($response);

?>