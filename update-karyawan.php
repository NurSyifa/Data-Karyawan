<?php
include("koneksii.php");

//cek apakah tombol daftar diklik atau blum ?
if(isset($_POST['simpan'])){

	//ambil data dari formulir
	$id = $_POST['id'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$jabatan = $_POST['jabatan'];

	//buat query update
	$sql = "UPDATE karyawan SET nama_karyawan='$nama_karyawan', jenis_kelamin='$jenis_kelamin', alamat='$alamat', agama='$agama', jabatan='$jabatan' WHERE id='$id'";
	$query = mysqli_query($db, $sql);

	//apakah query update berhasil ?
	if($query){
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('location: list-karyawan.php');
	} else {
		// kalau gagal tampilan pesan
		die("Gagal menyimpan perubahan...");
	}

}else{
	die("Akses dilarang...");
}

?>