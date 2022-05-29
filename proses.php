<?php
//secure from un login user
session_start();
if(!isset ($_SESSION["no_hp"])){
	header('location: login.php ');
	exit;
}

//secure from un listed proccess
if (!isset($_POST['tambahData']) && !isset($_POST['editData']) && !isset($_POST['hapusData'])) {
    header('location: index.php');
    exit;
}

include_once 'koneksi.php';

//tambah data
if (isset($_POST['tambahData'])) {
    $prov = $_POST['prov'];
    $kab = $_POST['kab'];
    $kec = $_POST['kec'];
    $faskes_jenis = $_POST['faskes_jenis'];
    $faskes_name = $_POST['faskes_name'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($mysqli, "INSERT INTO data_vaksin (prov, kab, kec, faskes_jenis, faskes_name, nik, nama, jk, umur, tgl_lahir, no_hp, alamat) VALUES ('$prov', '$kab', '$kec', '$faskes_jenis', '$faskes_name', '$nik', '$nama', '$jk', '$umur', '$tgl_lahir', '$no_hp', '$alamat')");
    // var_dump($query);

    if ($query == true) {
        $success = urlencode("Data berhasil di tambah!");
        header("location: index.php?success=" . $success);
    } else {
        $error = urlencode("Data gagal ditambah!");
        header('location: index.php?error=' . $error);
    }
}

//edit data
if (isset($_POST['editData'])) {
    $id = $_POST['id'];
    $prov = $_POST['prov'];
    $kab = $_POST['kab'];
    $kec = $_POST['kec'];
    $faskes_jenis = $_POST['faskes_jenis'];
    $faskes_name = $_POST['faskes_name'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $umur = $_POST['umur'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($mysqli, "UPDATE data_vaksin SET prov='$prov', kab='$kab', kec='$kec', faskes_jenis='$faskes_jenis', faskes_name='$faskes_name', nik='$nik', nama='$nama', jk='$jk', umur='$umur', tgl_lahir='$tgl_lahir', no_hp='$no_hp', alamat='$alamat' WHERE id='$id'");
    var_dump($query);

    if ($query == true) {
        $success = urlencode("Data berhasil di edit!");
        header("location: index.php?success=" . $success);
    } else {
        $error = urlencode("Data gagal di edit!");
        header('location: index.php?error=' . $error);
    }
}

if (isset($_POST['hapusData'])) {
    $id = $_POST['id'];

    $query = mysqli_query($mysqli, "DELETE FROM data_vaksin WHERE id='$id'");
    var_dump($query);

    if ($query == true) {
        $success = urlencode("Data berhasil di hapus!");
        header("location: index.php?success=" . $success);
    } else {
        $error = urlencode("Data gagal di hapus!");
        header('location: index.php?error=' . $error);
    }
}
