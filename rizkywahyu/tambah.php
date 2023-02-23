<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH DATA</title>
</head>
<body>
    <center>
    <h1>TAMBAH DATA</h1>
    <form action="proses.php" method="POST">
        <table border="3">
        <tr>
            <td><label for="nama_paket">Nama Paket</label></td>
            <td><select name="nama_paket">
                <option value="nama_paket">Standar</option>
                <option value="nama_paket">Gold</option>
                <option value="nama_paket">Silver<option>
        <tr>
            <td><label for="tujuan">Tujuan</label></td>
            <td><input type="text" name="tujuan"></td>
        </tr>
        <tr>
            <td><label for="tgl_berangkat">Tanggal Berangkat</label></td>
            <td><input type="date" name="tgl_berangkat"></td>
        </tr>
        <tr>
            <td><label for="nama_peserta">Nama Peserta</label></td>
            <td><input type="text" name="nama_peserta"></td>
        </tr>
        <tr>
            <td><label for="alamat">alamat</label></td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">jenis_kelamin</label></td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
</table><p>
<td><a href="data.php"><input type="button" value="KEMBALI"></a></td>
<td><input type="submit" name="tambah" value="TAMBAH"></td>
</p>
</body>
</html>