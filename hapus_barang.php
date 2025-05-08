
<!-- Hasil Modul -->
<?php
session_start();
require "koneksi.php";

require "ProfileModel.php";

$ProfileModel = new profileModel($koneksi);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $ProfileModel->hapus($id);
}
?>


<!-- Hasil GPT -->
<?php
// require 'koneksi.php';

// // Mendapatkan ID dari URL
// $id = $_GET['id'];

// // Periksa apakah ID valid
// if (!empty($id)) {
//     // Query untuk menghapus data
//     $sql = "DELETE FROM profile_member WHERE id_member= $id";

//     // Eksekusi query
//     if ($koneksi->query($sql)) {
//         // Jika berhasil, kembali ke halaman utama
//         header("Location: Barang.php");
//         exit;
//     } else {
//         echo "Gagal menghapus data: " . $koneksi->error;
//     }
// } else {
//     echo "ID tidak ditemukan.";
// }
?>