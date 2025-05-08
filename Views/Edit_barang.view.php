<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form method="post">
        Nama: <input type="text" name="Nama" value="<?php echo $data['Nama']; ?>" required><br><br>

        Umur Akun: <input type="number" name="Umur_akun" value="<?php echo $data['Umur_akun']; ?>" required><br><br>

        Tanggal Masuk Server: <input type="date" name="Tanggal_masuk_server" value="<?php echo $data['Tanggal_masuk_server']; ?>" required><br><br>
        
        Roles: <input type="text" name="Roles" value="<?php echo $data['Roles']; ?>" required><br><br>

        Tag Member: <input type="text" name="Tag_member" value="<?php echo $data['Tag_member']; ?>" required><br><br>
        
        Status: 
        <select name="status" required>
            <option value="Waras" <?php if ($data['status'] == 'Waras') echo 'selected'; ?>>Waras</option>
            <option value="ga waras" <?php if ($data['status'] == 'ga waras') echo 'selected'; ?>>Ga Waras</option>
        </select><br><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
