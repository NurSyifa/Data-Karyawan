<?php
include 'koneksii.php';

$karyawan = $koneksi ->query("select karyawan.* from karyawan");

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<title>Data Karyawan</title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<hr>
				<div class="jumbotron">
				<h1>Data Karyawan</h1>
				<a href="karyawan.php" class="btn btn-primary">Beranda</a>
				<a href="form-karyawan.php" class="btn btn-primary">Tambah Data Karyawan</a>
				<a href="cetak-karyawan.php" class="btn btn-primary">Cetak</a>
				<a href="excel-karyawan.php" class="btn btn-primary">Cetak ke Excel</a>
			    <hr>
			    <form action="karyawan.php" method="get">
				<label>Cari :</label>
				<input type="text" name="cari">
				<input type="submit" value="Cari">
					</form>
					 
					<?php 
					if(isset($_GET['cari'])){
						$cari = $_GET['cari'];
						echo "<b>Hasil pencarian : ".$cari."</b>";
					}
					?>

					<table border="1">
					<tr>
						<th>id</th>
						<th>Nama Karyawan</th>
						

					</tr>
 
				<table class="table table-hover table-bordered">
					<thead>
						<tr>
							<th class="text-center">ID</th>
							<th class="text-center">Nama Karyawan</th>
							<th class="text-center">Jenis Kelamin</th>
							<th class="text-center">Alamat</th>
							<th class="text-center">Agama</th>
							<th class="text-center">Jabatan</th>

						</tr>
					</thead>
					<tbody>
						<?php foreach ($karyawan as $row) { ?>
							<tr>
								<td class="text-center"><?php echo $row['id'] ?></td>
								<td><?php echo $row['nama_karyawan'] ?></td>
								<td><?php echo $row['jenis_kelamin'] ?></td>
								<td><?php echo $row['alamat'] ?></td>
								<td><?php echo $row['agama'] ?></td>
								<td><?php echo $row['jabatan'] ?></td>
								
								<td class="text-center">
									<a href="edit-karyawan.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Edit</a>
									<a href="hapus-karyawan.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Hapus Data')">Hapus</a>
								</td>
							</tr>
						<?php } ?>		
					</tbody>
				</table>
				<?php
				if(isset($_GET['cari'])){
					$cari = $_GET['cari'];
					$data = mysql_query("select * from karyawan where karyawan like '%".$cari."%'");				
				}else{
					$data = mysql_query("select * from karyawan");		
				}
				$id = 1;
				while($d = mysql_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $id++; ?></td>
					<td><?php echo $d['nama']; ?></td>
				</tr>
				<?php } ?>
				<p>Total: <?php echo mysqli_num_rows($karyawan) ?></p>
				<br>
				<p>Dibuat Oleh : [Nur Syifa]</p>
			</div>
		</div>
	</div>
	<script src="../js/jquery-3.3.1.slim.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
