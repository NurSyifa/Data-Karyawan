<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Data Karyawan Baru</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<br>
				<div class="jumbotron">
				<h1>Data Karyawan Baru</h1>
				<a href="karyawan.php" class="btn btn-primary">Beranda</a>
				<hr>
				<div class="row">
					<div class="col-md-6">
						<form action="simpan-karyawan.php" method="POST">
							<div class="form-group">
								<label for="">Nama Karyawan</label>
								<input type="text" name="nama_karyawan" class="form-control">
							</div>
							<div class="form-group">
								<label for="jenis_kelamin" >Jenis Kelamin: </label>
								<br>
								<label><input type="radio" name="jenis_kelamin" value="laki-laki" >Laki-laki</label>
								<label><input type="radio" name="jenis_kelamin" value="perempuan"  >Perempuan</label>
							</div>
							<div class="form-group">
								<label for="">Alamat</label>
								<input type="text" name="alamat" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Agama</label>
								<select name="agama" class="form-control">
									<option value="Islam">Islam</option>
									<option value="Kristen">Kristen</option>
									<option value="Hindu">Hindu</option>
									<option value="Budha">Budha</option>
									<option value="Katolik">Katolik</option>
									<option value="Konghucu">Konghucu</option>
								</select>
							</div>
							<div class="form-group">
								<label for="">Jabatan</label>
								<input type="text" name="jabatan" class="form-control">
							</div>
							
							<button type="submit" class="btn btn-primary">Simpan</button>
						</form>
					</div>
				</div>
				<p>Dibuat Oleh : [Nur Syifa]</p>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>