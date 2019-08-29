<?php 
require "conn.php";

$id = $_GET['id'];

$select = "SELECT * FROM tb_dasar WHERE id = '$id'";
$data = mysqli_query($conn,$select);
$mhs = mysqli_fetch_assoc($data);



if (isset($_POST['ubah'])) {

	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$telp = $_POST['telp'];
	$npm = $_POST['npm'];
	$umur = $_POST['umur'];

	$query = "UPDATE `tb_dasar` SET 
				`nama` ='$nama',
				`alamat`='$alamat',
				`telp`='$telp',
				`npm`='$npm',
				`umur`='$umur' WHERE `id` = '$id'";

	$result = mysqli_query($conn,$query);

	if ($result) {
		echo "
				<script>
						alert('Data berhasil ubah')
							document.location.href = 'index.php'
				</script>
		";
	}else{
		echo "Gagal";

	}
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Data Barang</title>
	<style type="text/css">
		body{
			font-family: arial;	
		}
		a{
			text-decoration: none;
			color: blue;
		}
	</style>
</head>
<body>
	<h1>Data Barang</h1>
	<br>
	<form method="post">
		<input type="hidden" name="id" value="<?php echo $mhs['id']; ?>">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" required value="<?php echo $mhs['nama']; ?>"></td>
			</tr>
			<tr>
				<td>NPM</td>
				<td>:</td>
				<td><input type="text" name="npm" required value="<?php echo $mhs['npm']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" required value="<?php echo $mhs['alamat']; ?>"></td>
			</tr>
			<tr>
				<td>Hp</td>
				<td>:</td>
				<td>
					<input type="text" name="telp" required value="<?php echo $mhs['telp']; ?>">
				</td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td>
					<input type="text" name="umur" required value="<?php echo $mhs['umur']; ?>">
				</td>
			</tr>

		</table><br>
		<button name="ubah">Ubah</button><br><br>
		<a href="index.php">Kembali</a>
	</form>
</div>
</body>
</html>