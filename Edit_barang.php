<?php
require 'koneksi.php';

$id = $_GET['id'];
$sql = "SELECT * FROM profile_member WHERE id_member = $id";
$result = $koneksi->query($sql);
$data = $result->fetch_assoc();

require "ProfileModel.php";
$profileModel = new profileModel($koneksi);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['Nama'];
    $umur = $_POST['Umur_akun'];
    $tanggal = $_POST['Tanggal_masuk_server'];
    $roles = $_POST['Roles'];
    $tag = $_POST['Tag_member'];
    $status = $_POST['status'];
    $profileModel->tambah($id, $nama, $umur, $tanggal, $roles, $tag, $status);
}

require "Views/Edit_barang.view.php";
?>

