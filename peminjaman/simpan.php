<?php
include "koneksi.php";
$id_peminjaman=$_POST['id_peminjaman'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_peminjaman=$_POST['tgl_peminjaman'];
$tgl_pengembalian=$_POST['tgl_pengembalian'];
$query=mysqli_query($koneksi,"insert into peminjaman(id_peminjaman,id_anggota,id_buku,tgl_peminjaman_,tgl_pengembalian) values('$id_peminjaman','$id_anggota','$id_buku','$tgl_peminjamanan','$tgl_pengembalian')");
header('location:index.php.');
?>