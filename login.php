<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<?php
session_start();
if (isset($_SESSION['no_hp'])) {
    header('location: index.php');
}
?>

<body>

    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-6">
            <div class="border rounded shadow p-3">
                <div class="header text-center mt-3">
                    <h1 class="mb-3 ">APLIKASI PENDAFTARAN VAKSIN</h1>
                    <h2>Login</h2>
                    <h5>Silahkan login</h5>
                    <hr>
                </div>
                <div class="body m-5">
                    <form action="proses_login.php" method="post">
                        <div class="row mt-3 justify-content-center">
                            <div class="col-3 text-end">
                                <label class="col-form-label" for="no_hp">No. Handphone</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" type="no_hp" name="no_hp" id="no_hp" placeholder="081x-xxxx-xxxx">
                            </div>
                        </div>
                        <div class="row mt-3 justify-content-center">
                            <div class="col-3 text-end">
                                <label class="col-form-label" for="password">Password</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" type="password" name="password" id="password" placeholder="********">
                            </div>
                        </div>
                        <div class="row mt-5 justify-content-center">
                            <div class="col-6">
                                <p>Belum memiliki akun? <a href="register.php">Daftar</a></p>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-success" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>