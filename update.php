<?php
include 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM jurnal WHERE id = '$id'";
$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Data</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT Data
                    </div>
                    <div class="card-body">
                        <form action="updatep.php" method="POST">

                           <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="tglwaktu" class="form-label">Tanggal dan Waktu</label>
                                    <input type="datetime-local" id="tglwaktu" name="tglwaktu" required placeholder="YYYY-MM-DDTHH:MM" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="instruksi" class="form-label">Instruksi</label>
                                    <input type="text" id="instruksi" name="instruksi" required placeholder="" class="form-control">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
 <label for="kategori" class="form-label">Kategori</label>
        <select id="kategori" name="kategori" required class="form-control">
            <option value="" disabled selected>Pilih Kategori</option>
            <option value="Webinar">Webinar</option>
            <option value="Penilaian">Penilaian</option>
            <option value="Website">Website</option>
            <option value="Desain">Desain</option>
        </select>           
                           </div>
                                <div class="col-md-6">
                                    <label for="desk" class="form-label">Deskripsi</label>
                                    <input type="text" id="desk" name="desk" placeholder="" class="form-control">
                                </div>
                            </div>

                          <div class="row mb-3">
                                <div class="col-md-6">
 <label for="target" class="form-label">Target</label>
        <select id="target" name="target" required class="form-control">
            <option value="" disabled selected>Pilih</option>
            <option value="Tercapai">Tercapai</option>
            <option value="Tidak Tercapai">Tidak Tercapai</option>
        </select>           
                           </div>
                          <div>
                        <form>
                            <td><input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>
                            <td><input type="submit" class="btn btn-warning" name="update" value="Update"></td>
                            <button type="reset" class="btn btn-warning">RESET</button>
                            <a href="dashboard.php" class="btn btn-warning"> Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>