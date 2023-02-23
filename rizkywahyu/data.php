<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wahyu</title>
</head>
<body>
    <center>
        <h1>Data Wisata Biro "SAHABAT SAKTYA"</h1>
        <table border="3">
            <tr>
                <td>No</td>
                <td>Nama Paket</td>
                <td>Tujuan</td>
                <td>Tanggal Berangkat</td>
                <td>Nama Peserta</td>
                <td>alamat</td>
                <td>Jenis Kelamin</td>
                <td>Aksi</td>
            </tr>

<?php 
include('koneksi.php');
$query = mysqli_query($koneksi,"SELECT * FROM tb_peserta INNER JOIN tb_paket ON tb_peserta.id_paket = tb_paket.id_paket");
$no = 1;
foreach ($query as $row) :
?>
    <tr>
        <td><?= $no++;?></td>
        <td><?= $row['nama_paket'];?></td>
        <td><?= $row['tujuan'];?></td>
        <td><?= $row['tgl_berangkat'];?></td>
        <td><?= $row['nama_peserta'];?></td>
        <td><?= $row['alamat'];?></td>
        <td><?= $row['jenis_kelamin'];?></td>
        <td>
            <a href="edit.php?id=<?=$row['id'];?>"><input type="button" value="edit "> ||
            <a href="hapus.php?id=<?=$row['id'];?>"><input type="button" value="hapus"> 
    </tr>
 <?php endforeach ?>
</table><p>
<a href="menu.php"><input type="button" value="MENU"></a>
<a href="tambah.php"><input type="button" value="TAMBAH" name="tambah"></a>
</p>
</center>
</body>
</html>