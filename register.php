<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
<div class="container mt-5"> 
    <div class="alert alert-danger col-sm-12 text-center">
        <h4>Form Register</h4>
    </div>
    <form action ="prosesregister.php" method="POST">
        <div class="mb-4">
            <label for="formGroupExampleInput" class="form-label">Username</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Username" name="username">
        </div>
        <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Password</label>
            <input type="password" class="form-control" id="formGroupExampleInput2"  name="password">
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="formGroupExampleInput2"  name="conp">
                </div>
            </div>
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Email" name="email">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Nomor Telephone</label>
                    <input type="tel" class="form-control" id="formGroupExampleInput2" placeholder="+62" name="notelp">
                </div>
            </div>
            
        <div class="mt-4">
            <button type="submit" class="btn btn-danger">Daftar</button>
            <a href="login.php" class="btn btn-success">Kembali</a> <!-- Tidak perlu menggunakan tombol di dalam tombol -->
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>

