<?php 
$konek = mysqli_connect('localhost','root','','praktikum');

$nim = $_GET["nim"];
$isi = mysqli_query($konek,"SELECT * FROM datadiri WHERE nim=$nim");
$isi1 = mysqli_fetch_array($isi);

 ?>

<form method="post" action="update.php">
	Nama : <input type="text" name="nama" value="<?php echo $isi1['nama']; ?>"><br>
	NIM : <input type="text" name="nim" value="<?php echo $isi1['nim']; ?>"><br>
	Tanggal Lahir : <input type="date" name="tgl" value="<?php echo $isi1['tgl_lahir']; ?>"><br>
	Jenis Kelamin : 
	<input type="radio" name="jk" value="laki-laki" <?php echo $isi1['jenis_kel'] == "laki-laki" ? "checked" : "";?>>laki-laki
	<input type="radio" name="jk" value="perempuan" <?php echo $isi1['jenis_kel'] == "perempuan" ? "checked" : "";?>>perempuan
	<br>
	
	Program Studi :
	<select name="ps">
		<option value="manajemen informatika" <?php echo $isi1 ["program_studi"] == "manajemen informatika" ? "selected='selected'" : ""; ?>>manajemen informatika</option>
		<option value="teknik informatika" <?php echo $isi1 ["program_studi"] == "teknik informatika" ? "selected='selected'" : ""; ?>>teknik informatika</option>
		<option value="teknik telekomunikasi" <?php echo $isi1 ["program_studi"] == "teknik telekomunikasi" ? "selected='selected'" : ""; ?>>teknik telekomunikasi</option>
		<option value="perhotelan" <?php echo $isi1 ["program_studi"] == "perhotelan" ? "selected='selected'" : ""; ?>>perhotelan</option>
	</select><br>
	Fakultas : 
		<input type="radio" name="fakultas" value="FIT" <?php echo $isi1["fakultas"]== "FIT" ? "checked" : ""; ?>>FIT
		<input type="radio" name="fakultas" value="FKB" <?php echo $isi1["fakultas"]== "FKB" ? "checked" : ""; ?>>FKB
	  	<input type="radio" name="fakultas" value="FRI" <?php echo $isi1["fakultas"]== "FRI" ? "checked" : ""; ?>>FRI
	 	<input type="radio" name="fakultas" value="FIF" <?php echo $isi1["fakultas"]== "FIF" ? "checked" : ""; ?>>FIF<br>
	Asal : <input type="text" name="asal" value="<?php echo $isi1['asal']; ?>"><br>
	Moto Hidup : <textarea name="moto"><?php echo $isi1['moto_hidup']; ?></textarea><br>
	<input type="submit" name="edit" value="edit">


</form>

