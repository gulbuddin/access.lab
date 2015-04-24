<?php
include('connect.php');

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$senin = $_POST['senin'];
$selasa = $_POST['selasa'];
$rabu = $_POST['rabu'];
$kamis = $_POST['kamis'];
$jumat = $_POST['jumat'];
$sabtu = $_POST['sabtu'];

$query = mysql_query("INSERT INTO jadwal_mahasiswa(nama,nim,jurusan,senin,selasa,rabu,kamis,jumat,sabtu) VALUES('$nama','$nim','$jurusan','$senin','$selasa','$rabu','$kamis','$jumat','$sabtu')") or die(mysql_error());

if ($query) {
	echo '<script language="javascript">alert("Kamu sudah menginputkan mata kuliah"); document.location="index.php";</script>';

}
?>
