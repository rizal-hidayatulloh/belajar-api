<?php
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
    $id_db = $baris['id_barang'];
    $nama_db = $baris['nama_barang'];
    $harga_db = $baris['harga'];
    $stok_db = $baris ['stok'];

    echo $id_db;
    echo $nama_db;
    echo $harga_db;
    echo $stok_db;

}

?>