<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lakukan koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "jurnal";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Ambil nilai yang dikirim dari formulir
$id             = $_POST['id'];
$tglwaktu       = $_POST['tglwaktu'];
$kategori       = $_POST['kategori'];
$instruksi      = $_POST['instruksi'];
$desk           = $_POST['desk'];
$target         = $_POST['target'];
   // $picture = $_POST['picture'];

    // Validasi data (contoh sederhana, sesuaikan dengan kebutuhan)
    if (empty($tglwaktu) || empty($kategori) || empty($instruksi) || empty($desk) || empty($target)) {
        echo "Semua field harus diisi!";
    } else {
        // Lakukan update ke database
        $sql = "UPDATE jurnal SET tglwaktu='$tglwaktu', kategori='$kategori', instruksi='$instruksi', desk='$desk', target='$target' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Data berhasil diupdate";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } 

    // Tutup koneksi ke database
    $conn->close();
    header("Location: index.php");
}
?>
