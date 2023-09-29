<?php
include("phpconnect.php");

if (isset($_POST['submit'])) {
	$nis=$_POST['nis'];
	$nama=$_POST['nama'];
	$kelas=$_POST['kelas'];
	$jurusan=$_POST['jurusan'];
	$alamat=$_POST['alamat'];
	$kontak=$_POST['kontak'];
	$tanggallahir=$_POST['tanggallahir'];

	$sql="INSERT INTO submit
	(nis,nama,kelas,jurusan,alamat,kontak,tanggallahir) VALUES
	('$nis','$nama','$kelas','$jurusan','$alamat','$kontak','$tanggallahir')";

	$query=mysqli_query($koneksi,$sql);
	if ($query) {
        header('location: index.php?status=sukses');
    }else {
        header('location: index.php?status=gagal');
    } 
} else {
	die("Akses dilarang...");
}
?>