<!DOCTYPE html>
<html>
<head>
	<title>Cek nama</title>
</head>
<body>

	<?php
	include 'Nama.php';

	$nama = new Nama("Abd", "Hannan");

	echo '<h3>Nama depan saya adalah : '. $nama->nama_depan . '</h3>';
	echo '<br>';
	echo '<h3>Nama belakang saya adalah : '. $nama->nama_belakang . '</h3>';
	echo '<br>';

	echo '<h3>Nama Lengkap saya adalah : '. $nama->cek_nama() . '</h3>';
	?>


</body>
</html>