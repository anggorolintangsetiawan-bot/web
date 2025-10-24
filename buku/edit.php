<?php
include "koneksi.php";
$id_buku=$_GET['id_buku'];
$query=mysqli_query($koneksi, "select * from buku where id_buku='$id_buku'");
$data=mysqli_fetch_array($query);

?>
<h1>Edit Data</h1>
<form action="update.php" method="post">
    Id_buku : <input type="text" name="id_buku" value="<?php echo $data['id_buku']  ?>">
    <br>
    judul : <input type="text" name="judul" value="<?php echo $data['judul']  ?>">
    <br>
    nama_pengarang : <input type="text" name="nama_pengarang" value="<?php echo $data['nama_pengarang']  ?>">
    <br>
    Penerbit : <input type="text" name="penerbit" value="<?php echo $data['penerbit']  ?>">
    <br>
    tahun_terbit : <input type="text" name="tahun_penerbit" value="<?php echo $data['tahun_terbit']  ?>">
    <br>
    <button>Simpan</button>
</form>