<?php
// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "root";
$password = "";
$database = "data_user";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_user";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $user_db = $baris['username'];
    $pass_db = $baris['password'];

    echo $user_db;
    echo $pass_db;

}

?>
