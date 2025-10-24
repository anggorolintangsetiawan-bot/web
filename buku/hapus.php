<?php
include "koneksi.php";
$id_anggota=$_GET['id_anggota'];
$query=mysqli_query($koneksi,"delete from buku where id_buku='$id_buku'");
header('location:index.php');

?>