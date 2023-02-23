<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $nama_paket = $_POST['nama_paket'];
    $tujuan = $_POST['tujuan'];
    $tgl_berangkat = $_POST['tgl_berangkat'];
    $nama_peserta = $_POST['nama_peserta'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

$sql = "INSERT INTO tb_paket (nama_paket,tujuan,tgl_berangkat) VALUES ('$nama_paket','$tujuan','$tgl_berangkat')";
$query = mysqli_query($koneksi,$sql);

$sql = "SELECT max(id_paket) AS paket_id FROM tb_paket LIMIT 1";
$query = mysqli_query($koneksi,$sql);

$data = mysqli_fetch_array ($query);
$paket_id = $data['paket_id'];

$sql = "INSERT INTO tb_peserta (id_paket,nama_peserta,alamat,jenis_kelamin) VALUES ('$paket_id','$nama_peserta','$alamat','$jenis_kelamin')";
$query = mysqli_query($koneksi,$sql);

if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:tambah.php?status=gagal');
}

}