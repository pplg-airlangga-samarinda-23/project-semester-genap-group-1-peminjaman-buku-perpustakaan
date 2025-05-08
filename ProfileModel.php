<?php

class profileModel {
    private $koneksi;

    public function __construct(mysqli $koneksi) {
        $this->koneksi = $koneksi;
    }

    // ambil semua barang
    public function getAll() {
        $sql = "SELECT * FROM profile_member";
        $rows = $this->koneksi->execute_query($sql, []);
        return $rows;
    }
    // edit file
    public function tambah($id, $nama, $umur, $tanggal, $roles, $tag, $status) {
        $update_sql = "UPDATE profile_member SET Nama = '$nama', Umur_akun = $umur, Tanggal_masuk_server = '$tanggal', Roles = '$roles', Tag_member = '$tag', status = '$status' WHERE id_member = $id";
    
        if ($this->koneksi->query($update_sql)) {
            header("Location: Profile.php");
            exit;
        } else {
            echo "Error: " . $this->koneksi->error;
        }
    }
    // update file
    public function find($id) {
        $sql = "SELECT * FROM profile_member WHERE id_member=?";
        $rows = $this->koneksi->execute_query($sql, [$id])->fetch_assoc();
        return $rows;
    }
    
    public function update($nama, $umur, $tanggal, $roles, $tag, $status, $id) {
        $sql = "UPDATE profile_member SET Nama=?, Umur_akun=?, Tanggal_masuk_server=?, Roles=?, Tag_member=?, status=? WHERE id_member=?";
        $rows = $this->koneksi->execute_query($sql, [$nama, $umur, $tanggal, $roles, $tag, $status, $id]);
        header("location:profile.php");
    }

    // hapus barang

    public function hapus($id){
        $sql = "DELETE FROM profile_member WHERE id_member=?";
        $rows = $this->koneksi->execute_query($sql, [$id]) ;
        header("location:profile.php");
    }
}

