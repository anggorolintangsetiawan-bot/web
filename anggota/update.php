<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:../logout.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_anggota = mysqli_real_escape_string($koneksi, $_POST['id_anggota']);
    $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST['nama_lengkap']);
    $alamat = mysqli_real_escape_string($koneksi, $_POST['alamat']);
    $no_telpon = mysqli_real_escape_string($koneksi, $_POST['no_telpon']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    
    $query = mysqli_query($koneksi, "UPDATE anggota SET 
                                    nama_lengkap = '$nama_lengkap', 
                                    alamat = '$alamat', 
                                    no_telpon = '$no_telpon', 
                                    email = '$email' 
                                    WHERE id_anggota = '$id_anggota'");
    
    if ($query) {
        header('location: ?page=anggota/index&message=Data berhasil diupdate');
    } else {
        header('location: ?page=anggota/edit&id_anggota=' . $id_anggota . '&message=Data gagal diupdate: ' . mysqli_error($koneksi));
    }
} else {
    header('location: ?page=anggota/index');
}
?>