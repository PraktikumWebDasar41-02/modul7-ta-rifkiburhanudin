<?php 
include 'proses.php';



if (isset ($_POST['edit'])) {

 $nama = $_POST['nama'];
	$nim = $_POST['nim'];
	// $tgl = $_POST['tgl'];
	$ps = $_POST['ps'];
	$fakultas = $_POST['fakultas'];
	$asal = $_POST['asal'];
	$moto = $_POST['moto'];

mysqli_query ($konek,"UPDATE datadiri SET
			 
			 nama = '$nama',
			 
			 jenis_kel = '$jk',
			 program_studi = '$ps',
			 fakultas = '$fakultas',
			 asal = '$asal',
			 moto_hidup = '$moto'
			 WHERE nim=$nim
			 ");
}
 
 if (mysqli_affected_rows($konek) > 0) {
 	echo "berhasil di simpan";
 	header('Location:proses.php');
 }

 ?>