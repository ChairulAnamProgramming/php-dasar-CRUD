<?php 
require "conn.php";


$select = "SELECT * FROM tb_dasar";
$data = mysqli_query($conn,$select);




 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
<style type="text/css">
		body{
			font-family: arial;
		}
		tr th{
			padding: 3px 0;
		}
		tr td{
			text-align: center;
			padding: 5px 0;
		}
</style>
</head>
<body>
	<center><h2>Data Barang</h2></center>
<table class="table" border="1" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Hp</th>
			<th>Alamat</th>
			<th>Umur</th>
		</tr>
		<?php $i=1; ?>
		<?php while($mhs=mysqli_fetch_assoc($data)): ?>	
		<tr>
			<td><?php echo $i;$i++; ?></td>
			<td><?php echo $mhs['nama'] ?></td>
			<td><?php echo $mhs['npm'] ?></td>
			<td><?php echo $mhs['telp'] ?></td>
			<td><?php echo $mhs['alamat'] ?></td>
			<td><?php echo $mhs['umur'] ?></td>
		</tr>
		<?php endwhile; ?>
	</table>

<script type="text/javascript">window.print()</script>
</body>
</html>