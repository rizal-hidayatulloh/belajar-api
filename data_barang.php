<?php
   $nama_fr = $_GET['nama'];
   $harga_fr = $_GET['harga'];
   $stok_fr = $_GET['stok'];

// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "root";
$password = "admin123";
$database = "data_barang";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_barang";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $id_db = $baris['id_barang'];
    $nama_db = $baris['nama_barang'];
    $harga_db = $baris['harga'];
    $stok_db = $baris['stok'];
    

   if($nama_db === $nama_fr) {
    if($harga_db == $harga_fr) {
        if($stok_db <= $stok_fr) {
        $status="pembelian berhasil";

        } else {
            $status = "stok tidak mencukupi"; 
        }
   
    } else {
        $status = "harga tidak sesuai";
    }
    break;
   } else {
    $status = "barang tidak ada";
   }
    
}


$response = [
    'nama_barang' => $nama_db,
    'harga' => $harga_db,
    'stok' => $stok_db,
    'status' => $status,
];
echo json_encode($response);

?>