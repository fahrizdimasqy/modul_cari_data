<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
</head>
<body>
	<table>
		<tr>
			<td>No</td>
			<td>Nama Masakan</td>
			<td>Harga</td>
			<td>Status Harga</td>
		</tr>

		<?php
			include 'inc/koneksi.php';
			$query = mysqli_query($koneksi, "select * from masakan");

			while($data = mysqli_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $data['nama_masakan']?></td>
			<td><?php echo $data['harga']?></td>
			<td><?php echo $data['status_makanan']?></td>
		</tr>
		<?php
		}
		?>

	</table>
</body>
</html>