<?php
include "koneksi.php";
$id_peminjaman=$_GET['id_peminjaman'];
$query=mysqli_query($koneksi,"delete from peminjaman where id_peminjaman='$id_peminjaman'");
header('location:index.php');

?>