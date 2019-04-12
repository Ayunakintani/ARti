<?php
$dbServername="127.0.0.1";
$dbUsername= "haki_infokelas";
$dbPassword= "InfoKelas";
$dbName= "haki_infokelas";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName) or die("Koneksi gagal");
    //mysqli_select_db() digunakan untuk mengganti $databaseName dari $con
    //mysqli_select_db($con,$databaseName) or die("Database tidak bisa dibuka");
?>


