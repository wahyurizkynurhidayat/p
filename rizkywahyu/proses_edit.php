<?php
include("koneksi.php");
if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $nama_paket = $_POST['nama_paket'];
    $tujuan = $_POST['tujuan'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $nama_peserta = $_POST['nama_peserta'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "UPDATE tb_paket SET nama_paket='$nama_paket', tujuan='$tujuan', tgl_berangkat='$tgl_berangkat' WHERE id_paket='$id'";
$query = mysqli_query($koneksi,$sql);

$sql = "UPDATE tb_peserta SET nama_peserta='$nama_peserta', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id='$id'";
$query = mysqli_query($koneksi,$sql);
if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:edit.php?status=gagal');
}
}
?>