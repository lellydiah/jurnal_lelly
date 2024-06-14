<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id             = $_POST['id'];
$tglwaktu       = $_POST['tglwaktu'];
$kategori       = $_POST['kategori'];
$instruksi      = $_POST['instruksi'];
$desk           = $_POST['desk'];
$target         = $_POST['target'];

//query insert data ke dalam database
$query = "INSERT INTO jurnal (id, tglwaktu, kategori, instruksi, desk, target) VALUES ('$id', '$tglwaktu', '$kategori', '$instruksi', '$desk', '$target')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if(mysqli_query($conn, $query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    echo var_dump($query);
    echo "Data Gagal Disimpan!";

}

?>