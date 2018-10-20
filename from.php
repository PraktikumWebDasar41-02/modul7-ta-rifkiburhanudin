<form method="post">
	Nama : <input type="text" name="nama"><br>
	NIM : <input type="text" name="nim"><br>
	Tanggal Lahir : <input type="date" name="tgl"><br>
	Jenis Kelamin : 
	<input type="radio" name="jk" value="laki-laki">laki-laki
	<input type="radio" name="jk" value="perempuan">perempuan
	<br>
	Program Studi :
	<select name="ps">
		<option value="manajemen informatika">manajemen informatika</option>
		<option value="teknik informatika">teknik informatika</option>
		<option value="teknik telekomunikasi">teknik telekomunikasi</option>
		<option value="perhotelan">perhotelan</option>
	</select><br>
	Fakultas : 
		<input type="radio" name="fakultas" value="FIT">FIT
		<input type="radio" name="fakultas" value="FKB">FKB
	  	<input type="radio" name="fakultas" value="FRI">FRI
	 	<input type="radio" name="fakultas" value="FIF">FIF<br>
	Asal : <input type="text" name="asal"><br>
	Moto Hidup : <textarea name="moto"></textarea><br>
	<input type="submit" name="submit" value="submit">


</form>

<?php 
if (isset($_POST['submit'])) {
	$konek = mysqli_connect('localhost','root','','praktikum');

	
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$tgl = $_POST['tgl'];
	$jk = $_POST['jk'];
	$ps = $_POST['ps'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

	$simpan = mysqli_query($konek, "INSERT INTO datadiri VALUES('$nim','$nama','tgl','jk','$ps','$fakultas','$asal','$moto')");

	if ($simpan) {
		echo "berhasil";
		header('Location:proses.php');
	}
		}
	// $lihat = true;
	// if(empty($nim)){
	// 	echo "nim harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($nama)){
	// 	echo "nama harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($tgl)){
	// 	echo "tanggal harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($jk)){
	// 	echo "jenis kelamin harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($ps)){
	// 	echo "program studi harus di isi<br>";
	// 	$lihat = false;
	// }
	// $lihat = true;
	// if(empty($fakultas)){
	// 	echo "fakultas harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($asal)){
	// 	echo "asal harus di isi<br>";
	// 	$lihat = false;
	// }

	// $lihat = true;
	// if(empty($moto)){
	// 	echo "moto harus di isi<br>";
	// 	$lihat = false;
	// }


	// if (mysqli_query($konek, "INSERT INTO datadiri VALUES('$nim','$nama','tgl','$jk','$ps','$fakultas','$asal','$moto')")){
	// 	header("Location:proses.php");

	// }

 ?>
