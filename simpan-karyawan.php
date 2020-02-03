<?php
include 'koneksii.php';


$id = $_POST['id'];
$nama_karyawan = $_POST['nama_karyawan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$jabatan = $_POST['jabatan'];

$hasil = $koneksi->query("insert into karyawan (id, nama_karyawan, jenis_kelamin, alamat, agama, jabatan) values ('$id', '$nama_karyawan', '$jenis_kelamin', '$alamat', '$agama', '$jabatan')");

header('location:list-karyawan.php');
?>

