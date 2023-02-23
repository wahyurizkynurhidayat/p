<?php 
include("koneksi.php");
$id = $_GET['id'];

mysqli_query($koneksi,"DELETE FROM tb_paket WHERE id_paket='$id'");
mysqli_query($koneksi,"DELETE FROM tb_peserta WHERE id='$id'");

if($query){
    header('location:data.php?status=sukses');
}else{
    header('location:data.php?status=gagaaal');
}

?>