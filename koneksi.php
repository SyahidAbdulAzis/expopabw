<?php
$servername = "localhost";
$username = "root";
$dbname = "vacansheesh";
$password = "root";

$conn = mysqli_connect($servername, $username, $dbname, $password);
if(!$conn){
    die("Koneksi gagal, karena = ". mysqli_connect_error());
}
?>