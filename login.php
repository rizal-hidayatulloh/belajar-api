<?php

// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "root";
$password = "";
$database = "db_latihan";


$conn = mysqli_connect($servername, $username, $password, $database);

    // Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_user";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $user_db = $baris['user_name'];
    $pass_db = $baris['password'];

    echo $user_db;

}

?>