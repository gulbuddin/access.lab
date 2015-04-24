<?php
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$data = 'tesproyek';
	$koneksi = mysql_connect($host,$user,$pass) or die(mysql_error());
	$pilih = mysql_select_db ($data);
?>