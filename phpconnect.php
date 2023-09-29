<?php
$server="localhost";
$user="id20603010_root";
$password="Daftarsnc-smk2yk";
$nama_database="id20603010_daftar";

$koneksi=mysqli_connect($server, $user, $password, $nama_database);
if (!$koneksi) {
	die("Koneksi Database Gagal".mysqli_connect_error());
}
	//echo "Koneksi Database Berhasil";
?>