<?php
session_start();
$no_hp = $_POST['no_hp'];
$password = md5 ($_POST['password']);
var_dump($password);
$dataValid="YA";
if(strlen(trim($no_hp))==0){
	echo "<div class='alert alert-danger' role='alert'>No_hp Harus di isi</div>";
	$dataValid="TIDAK";
}
if(strlen(trim($password))==0){
	echo "<div class='alert alert-danger' role='alert'>Password Harus di isi</div>";
	$dataValid="TIDAK";
}
if($dataValid=="TIDAK"){
	echo "Masih ada kesalahan, silahkan perbaiki!<br>";
	echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
}

include "koneksi.php";
$sql = "select * from users where
		no_hp='".$no_hp."' and password='".$password."' limit 1";

$hasil = mysqli_query($mysqli,$sql) or die ('Gagal Akses<br>');
$jumlah = mysqli_num_rows($hasil);
if($jumlah>0){
	$row = mysqli_fetch_assoc($hasil);
	$_SESSION["no_hp"] = $row ["no_hp"];
	$_SESSION["nama"] = $row ["nama"];
	
	header ("Location: index.php");
}else{
	echo "User atau Password Salah!<br>";
	echo "<input type='button' value='Kembali' onClick='self.history.back()'>";
	exit;
}
?>