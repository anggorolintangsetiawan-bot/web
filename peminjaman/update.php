<?php
include "koneksi.php";
$id_peminjaman=$_POST['id_peminjaman'];
$id_anggota=$_POST['id_anggota'];
$id_buku=$_POST['id_buku'];
$tgl_peminjaman=$_POST['tgl_peminjaman'];
$tgl_pengembalian=$_POST['tgl_pengembalian'];
$query=mysqli_query($koneksi, "update peminjaman set id_peminjaman='$id_peminjaman',id_anggota='$id_anggota',id_buku='$id_buku',tgl_peminjaman='$tgl_peminjaman', id_pengembalian='$pengembalian' where id_peminjaman='$id_peminjaman'");
header('location:index.php');
?>