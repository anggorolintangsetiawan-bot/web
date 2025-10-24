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
    
    // Cek apakah ID anggota sudah ada
    $check_query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
    if (mysqli_num_rows($check_query) > 0) {
        header('location: ?page=anggota/tambah&message=Id Anggota sudah ada');
        exit;
    }
    
    $query = mysqli_query($koneksi, "INSERT INTO anggota (id_anggota, nama_lengkap, alamat, no_telpon, email) 
                                    VALUES ('$id_anggota', '$nama_lengkap', '$alamat', '$no_telpon', '$email')");
    
    if ($query) {
        header('location: ?page=anggota/index&message=Data berhasil ditambahkan');
    } else {
        header('location: ?page=anggota/tambah&message=Data gagal ditambahkan: ' . mysqli_error($koneksi));
    }
} else {
    header('location: ?page=anggota/index');
}
?>