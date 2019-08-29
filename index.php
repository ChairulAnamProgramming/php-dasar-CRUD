<?php 
require "conn.php";


$select = "SELECT * FROM tb_dasar";
$data = mysqli_query($conn,$select);




if (isset($_POST['simpan'])) {

	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$npm = $_POST['npm'];
	$umur = $_POST['umur'];

	$query = "INSERT INTO tb_dasar VALUES(null,'$nama','$alamat','$telp','$npm','$umur')";

	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "Data berhasil di tambahkan";
		header("location:index.php");
	}else{
		echo "Gagal";

	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Dasar</title>
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
		a{
			text-decoration: none;
			color: blue;
		}
		.print{
			position: absolute;
			right: 1%;
		}
		.btn-print{
			padding: 5px 15px;
		}
	</style>
</head>
<body>

	
	<h1>Data Barang</h1>
	<br>
	<form method="post">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required></td>
			</tr>
			<tr>
				<td>Npm</td>
				<td>:</td>
				<td><input type="text" name="npm" required></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required></td>
			</tr>
			<tr>
				<td>Hp</td>
				<td>:</td>
				<td><input type="text" name="telp" required></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" required></td>
			</tr>

		</table><br>
		<button name="simpan">Simpan</button>
	</form>
	<br><br>
	<a href="laporan.php"  class=" print"><button class="btn-print">print</button></a><br><br>
	<table class="table" border="1" cellspacing="0" cellpadding="0" width="100%">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>NPM</th>
			<th>Hp</th>
			<th>Alamat</th>
			<th>Umur</th>
			<th>Aksi</th>
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
			<td>
				<a href="hapus.php?id=<?php echo $mhs['id']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</a> |
				<a href="ubah.php?id=<?php echo $mhs['id']; ?>">Ubah</a>
			</td>
		</tr>
		<?php endwhile; ?>
	</table>
</body>
</html>