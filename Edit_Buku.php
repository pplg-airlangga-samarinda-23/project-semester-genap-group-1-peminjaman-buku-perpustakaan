<?php
require 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM profile_member WHERE id_member = $id";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

require "DashBoardModel.php";
$DashBoardModel = new DashBoardModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['Nama'];

    $DashBoardModel-> EditBuku($id, $id_buku, $judul_buku, $penerbit, $tahun );
}

require "DashBoard.php";
?>

