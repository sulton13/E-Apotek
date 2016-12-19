<html>
<head>
	<title>Pendaftaran</title>
</head>
<meta charset="utf-8" />

<link rel="stylesheet" type="text/css" href="css/Pendaftaran.css">
<script type="text/javascript">

	function carisaya() {
		var kode=document.getElementById("textkode").value;
		var nama=document.getElementById("textnama").value;
		var sex=document.getElementById("optsex").value;
		
		var alamat=document.getElementById("txtalamat").value;

		var tempat=document.getElementById("texttempat").value;

		var tanggal=document.getElementById("tgl").value;

		var bulan=document.getElementById("bln").value;

		var tahun=document.getElementById("thn").value;

		var email=document.getElementById("email").value;


		var url="hasil.php";
			url=url+"?isikode="+kode;
			url=url+"&isinama="+nama;
			url=url+"&cntgsex="+sex;
			url=url+"&isialamat="+alamat;
			url=url+"&isitempat="+tempat;
			url=url+"&isitanggal="+tanggal;
			url=url+"&isibulan="+bulan;
			url=url+"&isitahun="+tahun;
			url=url+"&isiemail="+email;
			
alert(url);

		 window.open(url);
		/*window.open(url,"BELAJAR",
			"resizable=no,menubar=no,status=no,toolbar=no,
			scrollbars=no,location=8,directories=0,dependent=yes,
			dialog=yes,modal=yes,unadorneed=yes,height=500,width=600,
			left=400,top=100");*/
}
</script>
<body style=" background-image:url(bg.png)">

	<div class="container">

				<form id="frmanggota" class="frmanggota" name="frmanggota" action="hasil.php" method="get">
		<div class="header">
		<center><h2>Form Pendaftaran Pelanggan EApotek</h2></center>
		<center><hr width="100%"></center>
		<center><span>Silahkan isi data diri anda lengkap anda untuk melakukan pendaftaran</span></center>
		</div>
			
			<div class="content">
				<input type="text" id="textkode" name="textkode" class="input" placeholder="Nomor Identitas"/>
				<input type="text" id="textnama" name="textnama" class="input" placeholder="Nama Lengkap"/>
			</div>
			
			<label>Jenis Kelamin :</label>
			<span><input type="radio" id="optsex" name="optsex" value="Laki-laki" checked>Laki-Laki
					<input type="radio" id="optsex" name="optsex" value="Perempuan">Perempuan
					</span>
				
				<center><textarea id="txtalamat" name="txtalamat"  placeholder="Alamat"></textarea></center>
					
				<label>Tanggal Lahir :</label>
				</br>
				</br>	
				<center>
					<select name="tgl" size="1"  id="tgl" >
				  <?php
				  for ($i=1;$i<=31;$i++)
				  {
				  echo "<option  value=".$i.">".$i."</option>";
				  }
				  ?>
				  </select>
				  <select  name="bln" size="1" id="bln">
				  <?php
				  $bulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				  for ($i=1;$i<=12;$i++)
				  {
				  echo "<option  value=".$i.">".$bulan[$i]."</option>";
				  }
				  ?>
				  </select>
				  <select  name="thn" size="1" id="thn">
				  <?php
				  for ($i=1985;$i<=2000;$i++)
				  {
				  echo "<option  value=".$i.">".$i."</option>";
				  }
				  ?>
				  </select>
				  </br>
				  </br>
				</center>
				<div class="content">
					<input type="text" name="texttempat" id="texttempat" class="input" placeholder="Tempat Lahir">
					</div>
				
				  
				 <div class="content">
					<input type="text" name="email" id="email" class="input" placeholder="Email"> 	
				 </div> 
			
			<div class="footer">
				<input type="button" onClick="javascript: carisaya()" value="Simpan" class="button">
			</div>
	</form>
	</div>

			
</body>
</html>