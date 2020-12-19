<?php 

$angka1 = @$_POST['angka1'];
$angka2 = @$_POST['angka2'];
$hasil = @$_POST['hasil'];

if(isset($_POST['tambah'])) {
	$hasil = $angka1 + $angka2;
}

if(isset($_POST['kurang'])) {
	$hasil = $angka1 - $angka2;
}

if(isset($_POST['kali'])) {
	$hasil = $angka1 * $angka2;
}

if(isset($_POST['bagi'])) {
	$hasil = $angka1 / $angka2;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kalkulator php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<form action="" method="post">
	  <table align="center">
	    <tr>
		   <td colspan="3" style="text-align:center;"> Kalkulator Sederhana</td>
		</tr>
		<tr>
		  <td colspan="3"> <hr> </td>
		</tr>
		<tr>
		  <td>Angka 1</td>
		  <td>:</td>
		  <td>
		    <input type="text" name="angka1" value="<?= $angka1; ?>" required>
		  </td>
		</tr>
		<tr>
		  <td>Angka 2</td>
		  <td>:</td>
		  <td>
		    <input type="text" name="angka2" value="<?= $angka2; ?>" required>
		  </td>
		</tr>
		<tr>
		  <td>
		    <input type="submit" name="tambah" value="+">
			<input type="submit" name="kurang" value="-">
			<input type="submit" name="kali" value="x">
			<input type="submit" name="bagi" value=":">
		  </td>
		</tr>
		<tr>
		  <td>Hasil</td>
		  <td>:</td>
		  <td>
		    <input type="text" name="hasil" value="<?= $hasil; ?>">
		  </td>
		</tr>
		<tr>
		  <td colspan="3"> <hr> </td>
		</tr>		
	  </table>
	</form>
	</div>
</body>
</html>