<?php
include "koneksi.php";
$id_peminjaman=$_GET['id_peminjaman'];
$query=mysqli_query($koneksi, "select * from peminjaman where id_peminjaman='$id_peminjaman'");
$data=mysqli_fetch_array($query);

?>
<h1>Edit Data</h1>
<form action="update.php" method="post">
    Id_peminjaman : <input type="text" name="id_peminjaman" value="<?php echo $data['id_peminjaman']  ?>">
    <br>
    id_Anggota: <input type="text" name="id_anggota" value="<?php echo $data['id_anggota']  ?>">
    <br>
    id_buku : <input type="text" name="id_buku" value="<?php echo $data['id_buku']  ?>">
    <br>
    tgl_peminjaman : <input type="text" name="tgl_peminjaman" value="<?php echo $data['tgl_peminjaman']  ?>">
    <br>
    tgl_pengembalian : <input type="text" name="tgl_pengembalian" value="<?php echo $data['tgl_pengembalian']  ?>">
    <br>
    <button>Simpan</button>
</form>