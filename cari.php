<?php 
include 'koneksii.php';
?>
 
<h3>Form Pencarian </h3>
 
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
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>Jurusan</th>

	</tr>
	<?php 
	if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysql_query("select * from karyawan where nama like '%".$cari."%'");				
	}else{
		$data = mysql_query("select * from karyawan");		
	}
	$id = 1;
	while($d = mysql_fetch_array($data)){
	?>
	<tr>
		<td><?php echo $id++; ?></td>
		<td><?php echo $d['nama_karyawan']; ?></td>
		<td><?php echo $d['jenis_kelamin']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td><?php echo $d['agama']; ?></td>
		<td><?php echo $d['jurusan']; ?></td>
	</tr>
	<?php } ?>
</table>