<?php
include 'koneksii.php';
$id = $_GET['id'];

$hasil = $koneksi->query("select karyawan.* from karyawan where karyawan.id = '$id'");
$karyawan = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Edit Nama Karyawan</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>Edit Nama Karyawan</h1>
				<a href="karyawan.php" class="btn btn-primary">Beranda</a>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<form action="proses-karyawan.php" method="POST">
							<input type="hidden" name="id" value="<?php echo $karyawan['id'] ?>">
							<div class="form-group">
								<label for="">Nama Karyawan</label>
								<input type="text" name="nama_karyawan" class="form-control" value="<?php echo $karyawan['nama_karyawan'] ?>">
							</div>
							<div class="form-group">
							<label for="jenis_kelamin">Jenis Kelamin: </label>
							<?php $jenis_kelamin = $karyawan['jenis_kelamin']; ?>
							<br>
							<label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jenis_kelamin == 'laki-laki') ? "checked" : "" ?>>Laki-laki</label>
							<label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jenis_kelamin == 'perempuan') ? "checked" : "" ?>>Perempuan</label>
							<div class="form-group">
								<label for="">Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?php echo $karyawan['alamat'] ?>">
							</div>
							<div class="form-group">
								<label for="">Agama</label>
								<select name="agama" class="form-control">
									<option value="Islam"<?php echo $karyawan['agama'] == 'Islam' ? 'selected' : ''?>>Islam</option>
									<option value="Kristen"<?php echo $karyawan['agama'] == 'Kristen' ? 'selected' : ''?>>Kristen</option>
									<option value="Hindu"<?php echo $karyawan['agama'] == 'Hindu' ? 'selected' : ''?>>Hindu</option>
									<option value="Budha"<?php echo $karyawan['agama'] == 'Budha' ? 'selected' : ''?>>Budha</option>
									<option value="Katolik"<?php echo $karyawan['agama'] == 'Katolik' ? 'selected' : ''?>>Katolik</option>
									<option value="Konghucu"<?php echo $karyawan['agama'] == 'Konghucu' ? 'selected' : ''?>>Konghucu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">jabatan</label>
								<input type="text" name="jabatan" class="form-control" value="<?php echo $karyawan['jabatan'] ?>">
							</div>
							
							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
				</div>
				<br>
				<p>Dibuat Oleh : [Nur Syifa]</p>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
