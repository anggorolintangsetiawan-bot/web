<?php
include "koneksi.php";
$id_petugas=$_POST['id_petugas'];
$nama=$_POST['nama'];
$unsername=$_POST['username'];
$password=$_POST['password'];
$jabatan=$_POST['jabatan'];
$query=mysqli_query($koneksi,"insert into petugas(id_petugas,nama,username,password,jabatan) values('$id_petugas','$nama','$username','$password','$jabatan')");
header('location:index.php');
?>