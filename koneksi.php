<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$dbname   = 'jurnal';

$conn = mysqli_connect($hostname, $username, $password, $dbname);

if  ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>