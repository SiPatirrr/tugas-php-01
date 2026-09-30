<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php

$nama = "Ridho";
$kelas = "XII PPLG 1";
$nilaiTugas = 80;
$nilaiUts = 85;
$nilaiUas = 92;
$predikat;
$status;

$nilaiAkhir = ($nilaiTugas * 0.30) + ($nilaiUts * 0.30) + ($nilaiUas * 0.40);

if ($nilaiAkhir >= 90){
    $predikat = "A";
}elseif ($nilaiAkhir >= 80) {
    $predikat = "B";
}elseif ($nilaiAkhir >= 75) {
    $predikat = "C";
}elseif ($nilaiAkhir >= 60) {
    $predikat = "D";
}else {
    $predikat = "E";
}

if ($nilaiAkhir >= 75) {
    $status = "Lulus";
}else {
    $status = "Tidak Lulus";
}

echo "<h1> Hasil Penilaian Siswa </h1>";
echo "Nama: " . $nama;
echo "<br>";
echo "Kelas: " . $kelas;
echo "<br>";
echo "<hr>";
echo "Nilai Tugas: " . $nilaiTugas;
echo "<br>";
echo "Nilai UTS: " . $nilaiUts;
echo "<br>";
echo "Nilai UAS: " . $nilaiUas;
echo "<hr>";
echo "Nilai Akhir: " . $nilaiAkhir;
echo "<br>";
echo "Predikat: " . $predikat;
echo "<br>";
echo "Status: " . $status;
?>
<body>
    
</body>
</html>