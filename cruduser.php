<?php
function kodeCust(){
    include 'koneksi.php';
    $q = "SELECT * FROM user ORDER BY id DESC LIMIT 1";
    $res = mysqli_query($conn,$q);  
    $jumlah = mysqli_num_rows($res);
    if($jumlah > 0) {
        $baris = mysqli_fetch_assoc($res);
        $code = $baris['id'];
        $kode = $code+1;
    } else{
        $kode = 0;
    }
    mysqli_close($conn);
    return $kode;
}

function adduser($id,$user, $pass, $email, $tel, $alamat){
    include 'koneksi.php';
    $sql = "INSERT INTO user VALUES ($id, '$user','$pass','$email', '$tel', '$alamat')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}

function cariuserdariusername($user){
    include 'koneksi.php';
    $data = [];
    $sql = "SELECT * FROM user WHERE username = '$user'";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
        while($baris = mysqli_fetch_assoc($res)){
            $data['username'] = $baris['username'];
            $data['password'] = $baris['password'];
            $data['email'] = $baris['email'];
            $data['notelp'] = $baris['notelp'];
            $data['alamat'] = $baris['alamat'];
            
            mysqli_close($conn);
            return $data;
        }
    }else{
        mysqli_close($conn);
        return null;
    }
}

function otentik($user, $pass)
{
    $dataUser = [];
    $pw = md5($pass);
    $dataUser = cariuserdariusername($user);
    if ($dataUser != null) {
        if ($pw == $dataUser['password']) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}


?>