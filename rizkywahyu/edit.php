<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header('location:data.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM tb_peserta INNER JOIN tb_paket ON tb_peserta.id_paket = tb_paket.id_paket WHERE tb_peserta.id='$id'";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT</title>
</head>
<body>
    <center>
    <h1>EDIT DATA</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <table border="3">
        <tr>
            <td><label for="nama_paket">Nama Paket</label></td>
            <td><select name="nama_paket" value="<?php echo $data['nama_paket'];?>">
                <option value="nama_paket">Standar</option>
                <option value="nama_paket">Gold</option>
                <option value="nama_paket">Silver<option>
        </tr>
        <tr>
            <td><label for="tujuan">Tujuan</label></td>
            <td><input type="text" name="tujuan" value="<?php echo $data['tujuan'];?>"></td>
        </tr>
        <tr>
            <td><label for="tgl_berangkat">Tanggal Berangkat</label></td>
            <td><input type="date" name="tgl_berangkat" value="<?php echo $data['tgl_berangkat'];?>"></td>
        </tr>
        <tr>
            <td><label for="nama_peserta">Nama Peserta</label></td>
            <td><input type="text" name="nama_peserta" value="<?php echo $data['nama_peserta'];?>"></td>
        </tr>
        <tr>
            <td><label for="alamat">alamat</label></td>
            <td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>"></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">jenis_kelamin</label></td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $data['jenis_kelamin'];?>"></td>
        </tr>
</table><p>
<td><a href="data.php"><input type="button" value="KEMBALI"></a></td>
<td><input type="submit" name="edit" value="EDIT"></td>
</p>
</body>
</html>