<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:../logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Data Anggota</h1>
        
        <?php
        if (isset($_GET['message'])) {
            $message = $_GET['message'];
            $alert_type = (strpos($message, 'gagal') !== false) ? 'danger' : 'success';
            echo "<div class='alert alert-$alert_type alert-dismissible fade show' role='alert'>
                    $message
                    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                  </div>";
        }
        ?>
        
        <a href="?page=anggota/tambah" class="btn btn-primary mb-3">Tambah Data</a>
        
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Id_Anggota</th>
                        <th>Nama_Lengkap</th>
                        <th>Alamat</th>
                        <th>No_Telpon</th>
                        <th>Email</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($koneksi, "SELECT * FROM anggota");
                    if (mysqli_num_rows($query) > 0) {
                        while ($data = mysqli_fetch_array($query)) {
                    ?>
                    <tr>
                        <td><?php echo $data['id_anggota'] ?></td>
                        <td><?php echo $data['nama_lengkap'] ?></td>
                        <td><?php echo $data['alamat'] ?></td>
                        <td><?php echo $data['no_telpon'] ?></td>
                        <td><?php echo $data['email'] ?></td>
                        <td>
                            <a href="?page=anggota/hapus&id_anggota=<?php echo $data['id_anggota'] ?>" 
                               class="btn btn-sm btn-danger" 
                               onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                            <a href="?page=anggota/edit&id_anggota=<?php echo $data['id_anggota'] ?>" 
                               class="btn btn-sm btn-warning">Edit</a>
                        </td>
                    </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='6' class='text-center'>Tidak ada data anggota</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>