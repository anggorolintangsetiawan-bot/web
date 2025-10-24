<?php
include "koneksi.php";
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:../logout.php');
    exit;
}

if (isset($_GET['id_anggota'])) {
    $id_anggota = mysqli_real_escape_string($koneksi, $_GET['id_anggota']);
    
    // Cek apakah data ada sebelum dihapus
    $check_query = mysqli_query($koneksi, "SELECT * FROM anggota WHERE id_anggota = '$id_anggota'");
    if (mysqli_num_rows($check_query) > 0) {
        $query = mysqli_query($koneksi, "DELETE FROM anggota WHERE id_anggota = '$id_anggota'");
        
        if ($query) {
            header('location: ?page=anggota/index&message=Data berhasil dihapus');
        } else {
            header('location: ?page=anggota/index&message=Data gagal dihapus: ' . mysqli_error($koneksi));
        }
    } else {
        header('location: ?page=anggota/index&message=Data tidak ditemukan');
    }
} else {
    header('location: ?page=anggota/index');
}