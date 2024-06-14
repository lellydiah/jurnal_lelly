<?php
include 'koneksi.php';
include 'cruduser.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$telp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$conp = $_POST['conp'];
$pw = password_hash($pass, PASSWORD_DEFAULT);

if($pass != $conp){
    echo "<script type'text/javascript'>
    alert('Password tidak sama');
    window.location='register.php'
    </script>";
} else {
    $kode = kodeCust() + 1;
    adduser($kode, $user, $pw, $email, $telp, $alamat);
    echo "<script type'text/javascript'>
    alert('Akun anda berhasil terdaftar');
    window.location='login.php'
    </script>";
}
?>