<?php
session_start();
include 'cruduser.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];


        $user = cariuserdariusername($username);


        if ($user && password_verify($password, $user['password'])) {
           
            $_SESSION['username'] = $user['username'];
            $_SESSION['kode'] = $user['id'];
            header("Location: index.php");
        } else {
            echo "<script>
            alert('Username atau password salah');
            window.location='login.php'
            </script>";
            
        }
    } else {
        $error = "Isian tidak lengkap";
        
    }
}
?>
