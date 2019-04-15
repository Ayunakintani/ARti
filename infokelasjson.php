<?php
// Koneksi DB berdasarkan konfigurasi koneksidb.php
require_once("koneksidb.php");

// Tanggal
$tanggal = '2019-04-01';
//  $tanggal = 'NOW()';

// Jam
$jamsekarang = date('H:i:s');
$jam00 = DateTime::createFromFormat('H:i:s', '00:00:00');
$jam08 = DateTime::createFromFormat('H:i:s', '08:00:00');
$jam10 = DateTime::createFromFormat('H:i:s', '10:00:00');
$jam12 = DateTime::createFromFormat('H:i:s', '12:00:00');
$jam13 = DateTime::createFromFormat('H:i:s', '13:00:00');
$jam15 = DateTime::createFromFormat('H:i:s', '15:00:00');
$jam17 = DateTime::createFromFormat('H:i:s', '17:00:00');

if ($jamsekarang >= $jam00 && $jamsekarang <= $jam10) {
  $jammasuk = $jam08->format('H:i:s');
  $jamkeluar = $jam10->format('H:i:s');
} else if ($jamsekarang >= $jam10 && $jamsekarang <= $jam12) {
  $jammasuk = $jam10->format('H:i:s');
  $jamkeluar = $jam12->format('H:i:s');
} else if ($jamsekarang >= $jam12 && $jamsekarang <= $jam15) {
  $jammasuk = $jam13->format('H:i:s');
  $jamkeluar = $jam15->format('H:i:s');
} else {
  $jammasuk = $jam15->format('H:i:s');
  $jamkeluar = $jam17->format('H:i:s');
} 

// Skrip SQL untuk data yang diambil
$sqltabel = "SELECT mata_kuliah.nama_matkul AS matkul, ruangan.nama_ruangan AS ruangan, dosen.nama AS dosen, absensi.jammasuk_absensi AS masuk, absensi.jamkeluar_absensi AS keluar, absensi.waktu_absensi AS waktu FROM `absensi` 
LEFT JOIN kelas ON absensi.id_kelas = kelas.id_kelas 
LEFT JOIN ruangan ON absensi.id_ruangan = ruangan.id_ruangan
LEFT JOIN dosen ON absensi.id_dosen = dosen.id_dosen
LEFT JOIN mata_kuliah ON kelas.id_matkul = mata_kuliah.id_matkul 
WHERE absensi.waktu_absensi = '$tanggal'
AND absensi.jammasuk_absensi >= '$jammasuk'
AND	absensi.jamkeluar_absensi   <= '$jamkeluar'
ORDER BY absensi.id_absensi DESC";

// Pengambilan data
$hasil  =mysqli_query($conn,$sqltabel);

// Jika data ada, ditampilkan dalam format JSON
if($hasil){
    $response = array();
    $response["data"] = array();
  
    while($row = mysqli_fetch_array($hasil))
    {
      array_push($response["data"], $row);
    }
    echo json_encode($response);
} else {
  $response["message"]="tidak ada data";
  echo json_encode($response);
}
?>