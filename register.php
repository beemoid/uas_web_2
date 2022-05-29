<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-6">
            <div class="border rounded shadow p-3">
                <div class="header text-center mt-3">
                    <h1 class="mb-3 ">APLIKASI PENDAFTARAN VAKSIN</h1>
                    <h2>Register</h2>
                    <h5>Please Fill your identity</h5>
                    <hr>
                </div>
                <div class="body m-5">
                    <form action="register.php" method="post">
                        <div class="row justify-content-center">
                            <div class="col-3 text-end">
                                <label class="col-form-label" for="nama">Nama Lengkap</label>
                            </div>
                            <div class="col-9">
                                <input class="form-control" type="text" name="nama" id="nama" placeholder="example">
                            </div>
                        </div>
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
                                <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
                            </div>
                            <div class="col-6 text-end">
                                <button class="btn btn-primary" name="daftar" type="submit">Register</button>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST['daftar'])) {
                            $nama = $_POST['nama'];
                            $no_hp = $_POST['no_hp'];
                            $password = $_POST['password'];

                            $dataValid = "YA";
                            if (strlen(trim($nama)) == 0) {
                                echo "<div class='alert alert-danger' role='alert'>Nama Harus di isi</div>";
                                $dataValid = "TIDAK";
                            }

                            $dataValid = "YA";
                            if (strlen(trim($no_hp)) == 0) {
                                echo "<div class='alert alert-danger' role='alert'>No_hp Harus di isi</div>";
                                $dataValid = "TIDAK";
                            }
                            if (strlen(trim($password)) == 0) {
                                echo "<div class='alert alert-danger' role='alert'>Password Harus di isi</div>";
                                $dataValid = "TIDAK";
                            }
                            if ($dataValid == "TIDAK") {
                                echo "Masih ada kesalahan, silahkan perbaiki!<br>";
                                echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
                                exit;
                            }

                            //memanggil file koneksi.php agar dapat terhubung antara database dan file 
                            include_once("koneksi.php");

                            // menambah user data baru ke database yaitu tabel pengguna dengan perintah sql
                            $result = mysqli_query($mysqli, "INSERT INTO users
                                        (nama,no_hp,password) 
                                     VALUES
                                        ('$nama','$no_hp',md5('$password'))");

                            echo "Biodata user telah ditambahkan, Terimakasih. <a href='login.php'>Login</a>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>