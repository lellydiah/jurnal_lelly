<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>
</head>



<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-9 col-xl-6">
                <img src="img/haha.png" style="width: 100%" alt="Logo">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <h2>Login</h2>
                <form action="proseslogin.php" method="POST">
                    <div class="form-outline mb-4">
                        <input type="text" id="username" class="form-control form-control-lg" name="user" />
                        <label class="form-label is-invalid" id="validationServer03" for="username">Username</label>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="password" id="password" class="form-control form-control-lg" name="pass" />
                        <label class="form-label" for="password">Password</label>
                    </div>
                    <div>
                <label for="pass" name= "password" id="pass">
            </div>  
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <a href="register.php">Daftar Account</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
</section>


</html>
