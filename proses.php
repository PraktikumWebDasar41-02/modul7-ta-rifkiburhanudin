<?php 
$konek = mysqli_connect('localhost','root','','praktikum');

if (isset($_GET['nim'])) {
	$ku=mysqli_query($konek,"DELETE FROM datadiri WHERE nim = '".$_GET['nim']."' ");
	if ($ku) {
	header("Location:proses.php");
	}

}
?>
	<a href="from.php">input yang baru</a>

	<form method="post">
		Cari:<input type="text" name="cari">
		<input type="submit" name="submit" value="cari">
	</form><br>





<table border="1">
	<thead>
		<td>nomor</td>
		<td>NIM</td>
		<td>nama</td>
		<td>Program Studi</td>
		<td>Fakultas</td>
		<td>asal</td>
		<td>moto</td>
		<td>Aksi</td>
	</thead>
	<tbody>
		<?php
		$akhir;
		if (isset($_POST['submit'])) {
			$akhir = mysqli_query($konek,"SELECT*FROM datadiri WHERE nim LIKE '%".$_POST['cari']."%'");
		}else{
			$akhir = mysqli_query($konek,"SELECT * FROM datadiri");
		}


		 $a = 1;
		 while ($arr = mysqli_fetch_array($akhir)) {
		 echo "<tr>";
		 echo "<td>$a</td>";
		 echo "<td>".$arr['nim']."</td>";
		 echo "<td>".$arr['nama']."</td>"; 
		 echo "<td>".$arr['program_studi']."</td>";
		 echo "<td>".$arr['fakultas']."</td>";
		 echo "<td>".$arr['asal']."</td>";
		 echo "<td>".$arr['moto_hidup']."</td>";
		 echo "<td><a href='proses.php?nim=".$arr['nim']."'>hapus</a>
		 <a href='edit.php?nim=".$arr['nim']."'>edit</a>
		 </td>";
		 echo "</tr>";
		 $a++;
		 }
		?>
	</tbody>
</table>