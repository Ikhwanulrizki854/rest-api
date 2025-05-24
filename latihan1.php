<?php

// $mahasiswa = [
//     [
//     "Nama" => "Ikhwanul Rizki",
//     "NIM" => "2217020148",
//     "Matkul" => "Integrasi Aplikasi Perusahaan"
//     ],
//     [
//     "Nama" => "Test",
//     "NIM" => "2217020003",
//     "Matkul" => "Integrasi Aplikasi Perusahaan"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost;dbname=kasir_platinum', 'root', '');
$db = $dbh->prepare('select * From admin');
$db->execute();
$admin = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($admin);
echo $data;

?>