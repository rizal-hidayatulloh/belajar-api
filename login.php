<?php

// Mendapatkan username dan password dari frontend
$user_fr = $_GET['user'];
$pass_fr = $_GET['pass'];
$status_fr = $_GET['status'];

// Menambahkan informasi credentials
$servername = "localhost"; // 127.0.0.1
$username = "kemasaja_belajar";
$password = "Ikhlash1993@";
$database = "kemasaja_belajar";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Query script SQL database untuk mendapatkan data dari table data_user
$sql = "SELECT * FROM data_user";
$hasil = $conn->query($sql);
while($baris = $hasil->fetch_assoc()) {
    $user_db = $baris['username'];
    $pass_db = $baris['password'];

    if ($user_db == $user_fr){
        if ($pass_db == $pass_fr){
            $status ="Login Successful";
        }else{
            $status = "Wrong Password";
        }
    }else{
        $status ="Wrong Username";
    }

}

//API format JSON
$response = [
    'username' => $user_db,
    'status' => $status
];
echo json_encode($response);

?>