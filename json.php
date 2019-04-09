<?php
require_once("koneksidb.php");
$sqltabel = " SELECT mata_kuliah.nama_matkul AS matkul, ruangan.nama_ruangan AS ruangan, dosen.nama AS dosen, absensi.jammasuk_absensi AS masuk, absensi.jamkeluar_absensi AS keluar, absensi.waktu_absensi AS waktu FROM `absensi` LEFT JOIN kelas ON absensi.id_kelas = kelas.id_kelas LEFT JOIN ruangan ON absensi.id_ruangan = ruangan.id_ruangan
LEFT JOIN dosen ON absensi.id_dosen = dosen.id_dosen
LEFT JOIN mata_kuliah ON kelas.id_matkul = mata_kuliah.id_matkul ORDER BY absensi.id_absensi DESC";
$hasil  =mysqli_query($conn,$sqltabel);
if(mysqli_num_rows($hasil) > 0 ){
  $response = array();  $response["data"] = array();
  while($x = mysqli_fetch_array($hasil)){
    $h['matkul'] = $x["matkul"];
    $h['ruangan'] = $x["ruangan"];
    $h['dosen'] = $x["dosen"];
    $h['waktu'] = $x["waktu"];
    $h['masuk'] = $x["masuk"];
    $h['keluar'] = $x["keluar"];
    array_push($response["data"], $h);
  }
  $response = json_encode($response);
}else {
  $response["message"]="tidak ada data";
  $response = json_encode($response);

}


