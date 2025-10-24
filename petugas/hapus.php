<?php
include "koneksi.php";
$id_petugas=$_GET['id_petugas'];
$query=mysqli_query($koneksi,"delete from petugas where id_petugas='$id_petugas'");
header('location:index.php');

?>