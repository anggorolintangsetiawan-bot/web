<?php
include "koneksi.php";
$id_buku=$_POST['id_buku'];
$judul=$_POST['judul'];
$nama_pengarang=$_POST['nama_pengarang'];
$penerbit=$_POST['penerbit'];
$tahun_penerbit=$_POST['tahun_terbit'];
$query=mysqli_query($koneksi,"insert into buku(id_buku,judul,nama_pengarang,penerbit,tahun_terbit) values('$id_buku','$judul','$nama_pengarang','$penerbit','$tahun_terbit')");
header('location:index.php');
?>