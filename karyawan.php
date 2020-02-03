<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Data Karyawan</title>
</head>

<body>
	<div class="container" >
		<div class="row">
			<div class="col-md-12">
				<br>
				<div class="jumbotron">
					<header>
						<h3>Data Karyawan</h3>
						<h1>Tahun 2019/2020</h1>
					</header>
					<br>
					<h4>Menu</h4>
					
							<a href="form-karyawan.php" class="btn btn-primary">Daftar Karyawan Baru</a>
							<a href="list-karyawan.php" class="btn btn-warning">Daftar Data </a>
							<a href="cetak-karyawan.php" target="_BLANK" class="btn btn-primary">PRINT</a>
							<a href="excel-karyawan.php" target="_BLANK" class="btn btn-warning">EXCEL</a>
						
					<?php if(isset($_GET['status'])): ?>
					<p>
						<?php 
							if($_GET['status'] == 'sukses'){
								echo "Pendaftaran Karyawan Baru Berhasil!";
							} else {
								echo "Pendaftaran Gagal!";
							}
						?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

	</body>
</html>