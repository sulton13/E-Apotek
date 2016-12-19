<html>
<head>
	<title>Hasil Pendaftaran</title>
</head>
<body style=" background-image:url(bg.png)">

<link rel="stylesheet" type="text/css" href="css/haasil.css">
<?php
	$kode = $_GET["isikode"];
	$nama = $_GET["isinama"];
	$sex  = $_GET["cntgsex"];
	$alamat = $_GET["isialamat"];
	$tempat = $_GET["isitempat"];
	$tanggal = $_GET["isitanggal"];
	$bulan = $_GET["isibulan"];
	$tahun = $_GET["isitahun"];
	$email = $_GET["isiemail"];
?>

	<div class="container">
		<div class="main">

		<div class="header">
		<center><h2>Pendaftaran Data Diri Anda</h2></center>
		</div>
		<center><hr width="75%"></center>
		
		</br>
		<center><table cellpadding="4" cellspacing="4" rules="all" border="1" class="zebra-table">
			<tr>
			<td>Nomor Identitas</td>
			<td><?php echo $kode; ?></td>

			<tr>
			<td>Nama</td>
			<td><?php echo $nama; ?></td>
	
			<tr>
				<td>Jenis Kelamin</td>

				<td><?php echo $sex; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>

				<td><?php echo $alamat; ?></td>
			</tr>
			<tr>
				<td>Tempat</td>

				<td><?php echo $tempat; ?></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>

				<td><?php echo $tanggal; ?> / <?php echo $bulan; ?> /
					<?php echo $tahun; ?>
				</td>
				<tr>
				<td>Email</td>

				<td><?php echo $email; ?></td>
			</tr>
				</table></center>
				<div class="footer">
					<input type="button" name="tombol" value="Daftar obat" class="button" onclick="window.location ='../Katalog/tesdoang.html';"/>
				</div>
		</div>
	</div>



</body>
</html>

<!-- Kode:			<?php echo $kode; ?><br>
	Nama:			<?php echo $nama; ?><br>
	Jenis Kelamin:	<?php echo $sex; ?><br>
	Agama:			<?php echo $agama; ?><br>
	Alamat:			<?php echo $alamat; ?><br>
	Password:		<?php echo $passw; ?><br>
	Hobi:			<?php echo $chk1." ". $chk2." ".$chk3; ?><br> -->