<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Perpus Dashboard</title>
    <script src="script.js"> </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        aside {
            width: 250px;
            background: #333;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .profile {
            padding: 20px;
            border-bottom: 1px solid #555;
            text-align: center;
        }

        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #555;
            display: block;
            margin: 0 auto 10px;
        }

        .profile span {
            display: block;
            margin-top: 5px;
            background: orange;
            padding: 5px;
            border-radius: 4px;
            font-size: 12px;
        }

/* Navigation Styles */
        nav {
            padding: 20px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #fff;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        nav ul li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        nav ul li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }


        .content {
            display: none;
            padding: 20px;
        }

        .content.active {
            display: block;
            gap: 20px;
        }
        .MainContent {
            display: none;
            padding: 20px;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .MainContent.active {
            display: flex;
        }
                .bottom-menu {
            padding: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .bottom-menu ul {
            list-style: none;
        }

        .bottom-menu li {
            margin-bottom: 10px;
        }

        .bottom-menu li a {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            text-decoration: none;
            padding: 8px 10px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .bottom-menu li a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .bottom-menu li a i {
            font-style: normal;
            width: 24px;
            text-align: center;
            font-size: 18px;
        }





        .back-button {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
            align-self: flex-start;
            transition: background 0.3s;

        }
        
        .back-button:hover {
            background: #5a6268;
        }

        main {
            flex: 1;
            background: #fff;
        }

        .topbar {
            background: green;
            color: white;
            padding: 20px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }



        .card {
            flex: 1;
            color: white;
            padding: 20px;
            border-radius: 5px;
            position: relative;
            text-decoration: none;
            transition: 0.5s;
            cursor: pointer;
        }

        .card:hover {
            transition: 0.5s;
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card.blue { background: #007bff; }
        .card.orange { background: #fd7e14; }
        .card.green { background: #28a745; }
        .card.red { background: #dc3545; }

        .card .text {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .card .more {
            background: rgba(255,255,255,0.3);
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 14px;
            display: inline-block;
        }

         /* CSS untuk tabel buku */
        .book-table-container {
            background-color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        
        .table-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            align-items: center;
        }
        
        .add-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            font-size: 14px;
        }
        
        .table-controls {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            align-items: center;
        }
        
        .entries-info {
            font-size: 14px;
            color: #666;
        }
        
        .search-box input {
            padding: 5px 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        
        tr:hover {
            background-color: #f9f9f9;
        }
        
        .action-icon {
            color: #333;
            text-decoration: none;
            font-size: 16px;
        }
        
        .table-footer {
            font-size: 14px;
            color: #666;
            text-align: right;
        }
        /* tambah buku */
        .add-book-container {
            max-width: 100%;
            margin: 0 auto;
            background-color:rgb(255, 255, 255);
            border-radius: 8px;
            box-shadow: 0 2px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        /* Header Styles */
        .page-header {
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }

        .page-title {
            font-size: 24px;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        /* Section Styles */
        .form-section {
            margin-bottom: 30px;
        }

        .section-title {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 15px;
            padding-bottom: 5px;
            border-bottom: 1px solid #eee;
        }

        /* Form Group Styles */
        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        .form-input {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        .form-input:focus {
            border-color: #3498db;
            outline: none;
        }

        .form-readonly {
            background-color: #f9f9f9;
            color: #777;
        }

        /* Divider Styles */
        .section-divider {
            height: 1px;
            background-color: #eee;
            margin: 30px 0;
            border: none;
        }

        /* Button Styles */
        .button-group {
            display: flex;
            justify-content: flex-end;
            gap: 15px;
            margin-top: 30px;
        }

        .button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button-primary {
            background-color: #3498db;
            color: white;
        }

        .button-primary:hover {
            background-color: #2980b9;
        }

        .button-secondary {
            background-color: #e74c3c;
            color: white;
        }

        .button-secondary:hover {
            background-color: #c0392b;
        }

        /* style data anggota */

    </style>
</head>
<body>
    <aside>
        <div>
            <div class="profile">
                <img src="Img-profile.png" alt="User">
                <?= $_SESSION['Username'] ?> testing nama
                <span>Administrator</span>
            </div>
            <nav>
                <ul>
                <li><a href="#" onclick="ShowPage(1)"><i>🏠</i> Dashboard</a></li>
                    <li><a href="kelola_data.php"><i>📁</i> Kelola Data</a></li>
                    <li><a href="pinjaman.php"><i>📚</i> Pinjaman</a></li>
                    <li><a href="log_data.php"><i>📝</i> Log Data</a></li>
                    <li><a href="laporan.php"><i>📄</i> Laporan</a></li>
                </ul>
            </nav>
        </div>
        <ul class="bottom-menu">
            <li class="pengguna"><a href="#"> <i>👤</i> Akun Pengguna </a></li>
            <li class="LogOut"><a href="Login.php" > <i>🔓</i>  Log Out</a> </li>
        </ul>
    </aside>
    <main>
        <div class="topbar">
            <div><strong>E-Perpus</strong></div>
            <div>Sistem Informasi Perpustakaan Berbasis Web</div>
        </div>

        <div id="DashPapan" class="MainContent active">
            
        <a href="#" class="card blue" onclick="ahaw('BukuPapan', 'DashPapan')">
            <div class="text">Daftar Buku</div>
            <span class="more">More Info →</span>
        </a>
        <a href="#" class="card orange" onclick="ahaw('AnggotaPapan', 'DashPapan')">
            <div class="text">Daftar Anggota</div>
            <span class="more">More Info →</span>
        </a>
        <a href="#" class="card green" onclick="ahaw('PinjamPapan', 'DashPapan')">
            <div class="text">Peminjaman</div>
            <span class="more">More Info →</span>
        </a>
        <a href="#" class="card red" onclick="ahaw('LaporanPapan', 'DashPapan')">
            <div class="text">Laporan</div>
            <span class="more">More Info →</span>
        </a>
    </div>
    
    <div id="BukuPapan" class="book-table-container content ">
            <div class="table-header">
            <button class="back-button" onclick="ShowPage(1)">← Kembali ke Dashboard</button>
                <a href="#" class="add-button" onclick="ahaw('tambahBuku', 'BukuPapan')" >+ Tambah Data</a>
                <span class="breadcrumb">Daftar Buku</span>
            </div>
            
            <div class="table-controls">
                <div class="entries-info">
                    Show 
                    <select>
                        <option>10</option>
                        <option>25</option>
                        <option>50</option>
                        <option>100</option>
                    </select> 
                    entries
                </div>
                
                <div class="search-box">
                    Search: <input type="text">
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Id Buku</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Tahun</th>
                        <th>Kelola</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>

                    </tr>
                </tbody>
            </table>
            
            <div class="table-footer">

            </div>
        </div>
    </div>


    <div id="AnggotaPapan" class="content">
        <button class="back-button" onclick="ShowPage(1)">← Kembali ke Dashboard</button>
        <h2>Daftar Anggota</h2>
        <p>Konten manajemen anggota akan muncul di sini</p>
    </div>

    <div id="PinjamPapan" class="content">
        <button class="back-button" onclick="ShowPage(1)">← Kembali ke Dashboard</button>
        <h2>Peminjaman</h2>
        <p>Konten peminjaman akan muncul di sini</p>
    </div>

    <div id="LaporanPapan" class="content">
        <button class="back-button" onclick="ShowPage(1)">← Kembali ke Dashboard</button>
        <h2>Laporan</h2>
        <p>Konten laporan akan muncul di sini</p>
    </div>

        <!-- tambah buku & anggota -->

    <div id="tambahBuku" class="content ">
            <div class="add-book-container">
        <header class="page-header">
            <h1 class="page-title">Tambah Buku</h1>
        </header>

        <section class="form-section">
            <h2 class="section-title">ID Buku</h2>
            
            <div class="form-group">
                <input name="id_buku" type="text" class="form-input form-readonly" placeholder="masukan id buku">
            </div>
            
            <div class="form-group">
                <label for="judul-buku" class="form-label">Judul Buku</label>
                <input type="text" name="judul_buku" id="judul-buku" class="form-input" placeholder="Masukkan judul buku">
            </div>
            <div class="form-group">
                <label for="nama-penerbit" class="form-label">Nama Penerbit</label>
                <input type="text" name="penerbit" id="nama-penerbit" class="form-input" placeholder="Masukkan nama penerbit">
            </div>
            
            <div class="form-group">
                <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
                <input type="text" name="tahun" id="tahun-terbit" class="form-input" placeholder="Masukkan tahun terbit">
            </div>
        
        </section>

        <div class="button-group">
            <button class="button button-secondary" onclick="ahaw('BukuPapan', 'tambahBuku')">Batal</button>
            <button type="submit" class="button button-primary" onclick="ahaw('BukuPapan', 'tambahBuku')">Simpan</button>
        </div>
    </div>
    

    </main>
</body>
</html>
