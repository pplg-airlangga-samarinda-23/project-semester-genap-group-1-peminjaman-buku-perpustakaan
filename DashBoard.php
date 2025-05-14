<?php
session_start();
require "koneksi.php";

// $rows = $koneksi->execute_query($sql, [])->fetch_all((MYSQLI_ASSOC));


// foreach ($rows as $row)
// {
//     echo "{$row['id']}: {$row['nama_barang']}\n";
// }  

require "DashBoardModel.php";
$DashboardModel = new  DashBoardModel($koneksi);


// kode php lama
// $rows = $koneksi->execute_query($sql, [])->fetch_all(MYSQLI_ASSOC);
// $rows = mysqli_query($koneksi, $sql);
require "Views/DashBoard.view.php";







?>
