<?php
include ("koneksii.php");

if (isset($_GET['id'])) {
	
	//ambil id dari query string
	$id = $_GET['id'];

	//buat query hapus
	$sql = "DELETE FROM karyawan WHERE id=$id";
	$query = mysqli_query($db, $sql);

	//apakah query hapus berhasil?
	if($query){
		header('location: list-karyawan.php');
	} else {
		die("gagal menghapus...");
	}

} else {
	die("akses dilarang...");
}
?>