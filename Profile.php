<?php
session_start();
require "koneksi.php";

$sql = "SELECT * FROM profile_member";

// $rows = $koneksi->execute_query($sql, [])->fetch_all((MYSQLI_ASSOC));



// foreach ($rows as $row)
// {
//     echo "{$row['id']}: {$row['nama_barang']}\n";
// }  

require "ProfileModel.php";
$profileModel = new  profileModel($koneksi);
$rows = $profileModel->getAll();

// kode php lama
// $rows = $koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
// $rows = mysqli_query($koneksi, $sql);
require "Views/profile.view.php";







?>












