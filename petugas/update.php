<?php
include "koneksi.php";
$id_petugas=$_POST['id_petugas'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$query=mysqli_query($koneksi, "update petugas set nama='$nama',username='$username',password='$password', jabatan='$jabatan' where id_petugas='$id_petugas'");
header('location:index.php');
?>