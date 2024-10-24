<?php

$nama_fr = $_GET['nama'];

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
    $nama_db = $baris['nama_siswa'];
    
    if ($nama_db== $nama_fr){
        $status= "nama benar";
        break;
    }
    else {
        $status="nama tidak benar";
        break;
    }

}

$response = [
    'nama_siswa' => $nama_db,
    'status' => $status
];
echo json_encode($response);

 ?>