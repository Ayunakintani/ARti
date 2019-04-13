<?php
// Koneksi DB berdasarkan konfigurasi koneksidb.php
require_once("koneksidb.php");

// Skrip SQL untuk data yang diambil
$sqltabel = "SELECT mata_kuliah.nama_matkul AS matkul, ruangan.nama_ruangan AS ruangan, dosen.nama AS dosen, absensi.jammasuk_absensi AS masuk, absensi.jamkeluar_absensi AS keluar, absensi.waktu_absensi AS waktu FROM `absensi` 
LEFT JOIN kelas ON absensi.id_kelas = kelas.id_kelas 
LEFT JOIN ruangan ON absensi.id_ruangan = ruangan.id_ruangan
LEFT JOIN dosen ON absensi.id_dosen = dosen.id_dosen
LEFT JOIN mata_kuliah ON kelas.id_matkul = mata_kuliah.id_matkul 
WHERE absensi.waktu_absensi = '2019-04-01'
AND absensi.jammasuk_absensi >= '15:00:00'
AND	absensi.jamkeluar_absensi   <= '17:00:00'
ORDER BY absensi.id_absensi DESC";

// Pengambilan data
$hasil  =mysqli_query($conn,$sqltabel);

// Jika data ada, ditampilkan dalam format JSON
if(mysqli_num_rows($hasil) > 0 ){
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