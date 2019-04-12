<?php
require_once("koneksidb.php");


if (isset($_POST['submit'])) {

	$matakuliah = mysqli_real_escape_string($conn,$_POST['nama_matkul']);
	date_default_timezone_set("Asia/Jakarta"); 
	$jkt = date("Y-m-d H:i:s");
	$today = date("Y-m-d");

		$sql = "SELECT * FROM kelas WHERE id_matkul = '$matakuliah'";
		$resultKelas = mysqli_query($conn,$sql);
		$ResultCheck = mysqli_num_rows($resultKelas);
		$rowKelas = mysqli_fetch_assoc($resultKelas);
		if ($ResultCheck = 1) {
			$kelas = $rowKelas['id_kelas'];
			$dosen = $rowKelas['id_dosen'];
			$ruangan = $rowKelas['id_ruangan'];
			$sqlCheckDate = "SELECT absensi.waktu_absensi AS waktu FROM absensi LEFT JOIN kelas ON kelas.id_kelas = absensi.id_kelas WHERE kelas.id_matkul = '$matakuliah' AND absensi.waktu_absensi = '$today'";
			$result = mysqli_query($conn,$sqlCheckDate);
			$ResultCheck = mysqli_num_rows($result);
			if ($ResultCheck < 1) {
				$now = new DateTime();
				$waktu = $now->format('d');

				$sql = "INSERT INTO absensi(id_kelas, id_ruangan, id_dosen, waktu_absensi, jammasuk_absensi) VALUES('$kelas','$ruangan','$dosen','$today', '$jkt') ";
				mysqli_query($conn,$sql);

				header("Location: index.php?halaman=absensi");
			}else{
				header("Location: index.php?halaman=absensi&error=besok");	
			}
			
		}else{
			header("Location: index.php?halaman=absensi&error=tryagain");
		}
		
		
}
?>					