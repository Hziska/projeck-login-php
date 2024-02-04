<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$koneksi = mysqli_connect($servername, $username, $password, $dbname);

if($koneksi->connect_error) {
    die("koneksii tidak jalan". $koneksi->connect_error);
}
?>