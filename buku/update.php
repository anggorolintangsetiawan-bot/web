<?php
include "koneksi.php";
$id_buku=$_POST['id_buku'];
$judul=$_POST['judul'];
$nama_pengarang=$_POST['nama_pengarang'];
$peenrbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];
$query=mysqli_query($koneksi, "update buku set id_buku='$id_buku',judul='$judul',nama_pengarang='$nama_pengarang',penerbit='$penerbit', tahun_terbit='$tahun_terbit' where id_buku='$id_buku'");
header('location:index.php');

?>