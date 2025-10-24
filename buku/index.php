<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Anggota</title>
<style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f5f8fa;
    padding: 20px;
  }
  h1 {
    color: #333;
    margin-bottom: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
    box-shadow: 0 2px 12px rgba(0,0,0,0.1);
    background-color: #fff;
    border-radius: 8px;
    overflow: hidden;
  }
  th, td {
    padding: 12px 15px;
    text-align: left;
  }
  th {
    background-color: #007BFF;
    color: #ffffff;
    font-weight: 600;
  }
  tr:nth-child(even) {
    background-color: #f2f6fc;
  }
  tr:hover {
    background-color: #d0e7ff;
    cursor: pointer;
  }
  a {
    color: #007BFF;
    text-decoration: none;
    margin-right: 8px;
  }
  a:hover {
    text-decoration: underline;
  }
</style>
</head>
<h1> Data Buku</h1>
<a href="tambah.php">Tambah data</a>
<table border="1">
    <thead>
    <tr>
        <td>id buku</td>
        <td>judul</td>
        <td>Nama pengarang</td>
        <td>Penerbit</td>
        <td>tahun penerbit</td>
        <td>Aksi</td>
    </tr>
    </thead>
    <?php
    $query=mysqli_query($koneksi,"select * from buku");
    while($data=mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id_buku']  ?></td>
            <td><?php echo $data['judul']  ?></td>
            <td><?php echo $data['nama_pengarang']  ?></td>
            <td><?php echo $data['penerbit']  ?></td>
            <td><?php echo $data['tahun_terbit']  ?></td>
            <td>
                <a href="hapus.php?id_buku=<?php echo $data['id_buku'] ?>class="btn btn-info>hapus</a>
                <a href="edit.php?id_buku=<?php echo $data['id_buku'] ?>class="btn btn-primary>edit</a>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
</tbody>
</table>

</body>
</html>