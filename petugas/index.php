<?php
include "koneksi.php";

?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<style>
  body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #74ebd5, #ACB6E5);
    padding: 40px;
    color: #333;
  }

  h1 {
    text-align: center;
    margin-bottom: 30px;
    color: #fff;
    font-weight: 700;
    text-shadow: 1px 1px 4px rgba(0,0,0,0.3);
  }

  table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0 10px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    overflow: hidden;
  }

  thead tr {
    background: linear-gradient(90deg, #71a4daff, #0658afff);
    color: #fff;
    font-weight: 600;
  }

  thead th {
    padding: 15px 20px;
    text-align: left;
  }

  tbody tr {
    background-color: #f9f9f9;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 8px;
  }

  tbody tr:hover {
    background-color: #e0f0ff;
    box-shadow: 0 4px 15px rgba(0,123,255,0.3);
    transform: translateY(-3px);
  }

  tbody td {
    padding: 15px 20px;
    vertical-align: middle;
  }

  /* Rounded corners for first and last column cells */
  tbody tr td:first-child {
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
  }
  tbody tr td:last-child {
    border-top-right-radius: 8px;
    border-bottom-right-radius: 8px;
  }

  /* Styling action links as buttons */
  a {
    display: inline-block;
    padding: 6px 14px;
    margin-right: 8px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  a.hapus {
    background-color: #e74c3c;
    color: #fff;
  }

  a.hapus:hover {
    background-color: #c0392b;
  }

  a.edit {
    background-color: #3498db;
    color: #fff;
  }

  a.edit:hover {
    background-color: #2980b9;
  }
</style>
</head>
<body>
<h1>Penjaga</h1>
<table border="1">
    <thead>
<tr>
    <td align="center">Id Petugas</td>
    <td align="center">Nama</td>
    <td align="center">Username</td>
    <td align="center">Password</td>
    <td align="center">Jabatan</td>
    <td align="center">Aksi</td>

</tr>
</thead>
<?php
$query=mysqli_query($koneksi,"select * from petugas");
while($data=mysqli_fetch_array($query)){
 ?>
<tr>
    <td><?php echo $data ['id petugas'] ?></td>
    <td><?php echo $data ['nama'] ?></td>
    <td><?php echo $data ['username'] ?></td>
    <td><?php echo $data ['password'] ?></td>
    <td><?php echo $data ['jabatan'] ?></td>
    <td>
        <button class="btn btn-sm btn-warning" color="#fbff00ff" data-bs-toggle="modal" data-bs-target="#editModal"   >Edit</button>
          <button class="btn btn-sm btn-danger" color="#FF0000">Hapus</button>
        
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