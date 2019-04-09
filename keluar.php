<?php  

	$dbServername="127.0.0.1";
	$dbUsername= "root";
	$dbPassword= "";
	$dbName= "adminti";
	$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
	if (isset($_GET['kelas'])) {

		date_default_timezone_set("Asia/Jakarta"); 
		$jkt = date("Y-m-d H:i:s");
		$now = new DateTime();
		$now = $now->format('Y-m-d');
		$idMatkul = $_GET['kelas'];
		$sql = "UPDATE absensi SET jamkeluar_absensi='$jkt' WHERE id_kelas='$idMatkul' AND waktu_absensi = '$now'";
		mysqli_query($conn,$sql);
		header("Location: index.php?halaman=absensi");
	}
?>