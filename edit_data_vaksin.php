<!doctype html>
<html lang="en">
<?php
session_start();
if (!isset($_SESSION["no_hp"])) {
    header('location: login2.php');
}

include_once 'koneksi.php';

//get content from id
$id = $_GET['id'];
$query = mysqli_query($mysqli, "SELECT * FROM data_vaksin WHERE id='$id'");
$data = mysqli_fetch_array($query);

?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Vaksin <?= $data['nama'] ?> </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">APLIKASI PENDAFTARAN VAKSIN</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a>
                        <a class="nav-link" href="#">Features</a>
                        <a class="nav-link" href="#">Pricing</a>
                        <a class="nav-link "></a> -->
                    </div>
                </div>
                <p>Welcome <?= $_SESSION['nama'] ?></p>
            </div>
        </nav>
        <div class="content  p-4">
            <div class="header">
                <h1>Ubah Data Vaksin <?= $data['nama'] ?> </h1>
            </div>
            <div class="body">
                <!-- <h4 class="mt-3">Form tambah data</h4> -->
                <form action="proses.php" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label class="form-label" for="prov">Provinsi</label>
                                <select class="form-select" name="prov" id="prob">
                                    <option selected  value="<?= $data['prov'] ?>"><?= $data['prov'] ?></option>
                                    <option value="Banten">Banten</option>
                                    <option value="Jakarta">Jakarta</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="kab">Kabupaten/Kota</label>
                                <select name="kab" id="kab" class="form-select">
                                    <option value="<?= $data['kab'] ?>" selected  ><?= $data['kab'] ?></option>
                                    <option value="Tangerang Selatan">Tangerang Selatan</option>
                                    <option value="Jakarta Barat">Jakarta Barat</option>
                                    <option value="Serang">Serang</option>
                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="form-label" for="kec">Kecamatan</label>
                                <select name="kec" id="kec" class="form-select">
                                    <option value="<?= $data['kec'] ?>" selected ><?= $data['kec'] ?></option>
                                    <option value="Rawabuntu">Rawabuntu</option>
                                    <option value="Pasar Kemis">Pasar Kemis</option>
                                    <option value="Slipi">Slipi</option>
                                    <option value="Kebayoran">Kebayoran</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="faskes_jenis" class="form-label">Faskes</label>
                                <select name="faskes_jenis" id="faskes_jenis" class="form-select">
                                    <option value="<?= $data['faskes_jenis'] ?>" selected ><?= $data['faskes_jenis'] ?></option>
                                    <option value="1">I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="faskes_name" class="form-label">Nama Faskes</label>
                                <select name="faskes_name" id="faskes_name" class="form-select">
                                    <option value="<?= $data['faskes_name'] ?>" selected ><?= $data['faskes_name'] ?></option>
                                    <option value="test">test</option>
                                    <option value="test">test</option>
                                    <option value="test">test</option>
                                    <option value="test">test</option>
                                    <option value="test">test</option>
                                    <option value="test">test</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="nik" class="form-label">Nomor Induk Kependudukan</label>
                                <input class="form-control" type="text" name="nik" id="nik" value="<?= $data['nik'] ?>">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input class="form-control" type="text" name="nama" id="nama" value="<?= $data['nama'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="jk" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" type="text" name="jk" id="jk">
                                    <option value="<?= $data['jk'] ?>" selected ><?= $data['jk'] ?></option>
                                    <option value="L">Laki Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="umur" class="form-label">Umur</label>
                                <input class="form-control" type="text" name="umur" id="umur" value="<?= $data['umur'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" name="tgl_lahir" id="tgl_lahir" value="<?= $data['tgl_lahir'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="no_hp" class="form-label">No. Handphone</label>
                                <input class="form-control" type="number" name="no_hp" id="no_hp" value="<?= $data['no_hp'] ?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input class="form-control" type="text-area" name="alamat" id="alamat" value="<?= $data['alamat'] ?>">
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    </div>
                    <div class="form-group mb-3 text-end">
                        <a href="index.php" class="btn btn-secondary">Kembali</a>
                        <button type="submit" name="editData" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>