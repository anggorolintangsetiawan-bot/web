<?php
include "koneksi.php";
?>
<h1>Tambah Data</h1>
<form action="simpan.php" method="POST">
    id buku : <input type="text" name="id_buku" >
    <br>
    judul : <input type="text" name="judul">
    <br>
    Nama_pengarang : <input type="text" name="nama_pengarang">
    <br>
    Penerbit : <input type="text" name="penerbit">
    <br>
    tahun terbit: <input type="text" name="tahun_terbit">
    <br>
    <button>Simpan</button>
</form>