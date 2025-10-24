<?php
include "koneksi.php";
$id_petugas=$_GET['id_petugas'];
$query=mysqli_query($koneksi, "select * from petugas where id_petugas='$id_petugas'");
$data=mysqli_fetch_array($query);

?>
<h1>Tambah Data</h1>
<form action="update.php" method="POST">
    id_petugas : <input type="text" name="id_petugas" value="<?php echo $data['id_petugas']  ?>">
    <br>
    nama: <input type="text" name="nama" value="<?php echo $data['nama']  ?>">
    <br>
    username : <input type="text" name="username" value="<?php echo $data['username']  ?>">
    <br>
    password : <input type="text" name="password" value="<?php echo $data['password']  ?>">
    <br>
    jabatan : <input type="text" name="jabatan" value="<?php echo $data['jabatan']  ?>">
    <br>
    <button>Simpan</button>
</form>