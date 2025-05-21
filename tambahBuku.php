<?php
    var_dump($_POST);
    require "koneksi.php";

    if ($_SERVER ["REQUEST_METHOD"] == "POST" ) {
        $Nama = htmlspecialchars($_POST["Nama"]);
        $Umur = $_POST["Umur"];
        $Tanggal = $_POST["Tanggal"];
        $Roles = htmlspecialchars($_POST["Roles"]);
        $Tag = $_POST["Tag"];
        $Status = $_POST["Status"];

        $sql = "INSERT INTO data_buku(id_buku, judul_buku, penerbit, tahun) values (?, ?, ?, ?)";
        // 
        $stmt = $koneksi->prepare($sql);
        $stmt->bind_param("ssss", $id_buku, $judul_buku, $penerbit, $tahun );
        $stmt->execute();
        


        require "DashBoard.php";
    }


?>






