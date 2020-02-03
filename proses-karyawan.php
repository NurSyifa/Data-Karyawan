<?php
include 'koneksii.php';

	$id = $_POST['id'];
	$nama_karyawan = $_POST['nama_karyawan'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$agama = $_POST['agama'];
	$jabatan = $_POST['jabatan'];

$hasil = $koneksi->query("update karyawan set
					
                     nama_karyawan = '$nama_karyawan', 
                     jenis_kelamin = '$jenis_kelamin', 
                     alamat = '$alamat', 
                     agama = '$agama', 
                     jabatan = '$jabatan'
                     where karyawan.id = '$id'");

header('location:list-karyawan.php');
