<?php 
require "conn.php";

$id = $_GET['id'];

$result = mysqli_query($conn,"DELETE FROM tb_dasar WHERE id = '$id'");

if ($result) {
		echo "
				<script>
						alert('Data berhasil hapus')
							document.location.href = 'index.php'
				</script>
		";
}

 ?>