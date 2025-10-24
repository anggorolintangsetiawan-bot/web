<?php
session_start();
if ($_SESSION['status'] <> "sukses") {
    header('location:../logout.php');
    exit;
}
?>
<div class="container mt-4">
    <h1 class="mb-4">Tambah Data Anggota</h1>
    
    <form action="?page=anggota/simpan" method="POST" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="id_anggota" class="form-label">Id Anggota</label>
            <input type="text" class="form-control" id="id_anggota" name="id_anggota" required>
            <div class="invalid-feedback">Id Anggota harus diisi</div>
        </div>
        
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
            <div class="invalid-feedback">Nama Lengkap harus diisi</div>
        </div>
        
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
            <div class="invalid-feedback">Alamat harus diisi</div>
        </div>
        
        <div class="mb-3">
            <label for="no_telpon" class="form-label">No. Telepon</label>
            <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
            <div class="invalid-feedback">No. Telepon harus diisi</div>
        </div>
        
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <div class="invalid-feedback">Email harus diisi dengan format yang benar</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="?page=anggota/index" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script>
// Validasi form
(function () {
  'use strict'
  var forms = document.querySelectorAll('.needs-validation')
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
        form.classList.add('was-validated')
      }, false)
    })
})()
</script>