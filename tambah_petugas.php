<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah Petugas</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.4/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.4/sweetalert2.min.js"></script>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="#"><b>Qurratu A'yun</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Tambah Petugas Baru</p>

      <form action="proses_tambah_petugas.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="Nama" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-briefcase"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Tambah</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<script>
    // Ambil pesan dari session dan tampilkan SweetAlert sesuai kondisi
    <?php if (isset($_SESSION['tambah_success']) && $_SESSION['tambah_success']) : ?>
        Swal.fire({
            icon: 'success',
            title: 'Sukses',
            text: '<?php echo $_SESSION['tambah_message']; ?>',
            showConfirmButton: false,
            timer: 3000
        }).then(function() {
            window.location.href = 'petugas/halaman_admin.php'; // Arahkan ke halaman admin setelah alert ditutup
        });
    <?php elseif (isset($_SESSION['tambah_error'])) : ?>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '<?php echo $_SESSION['tambah_error']; ?>',
            showConfirmButton: false,
            timer: 3000
        });
    <?php endif; ?>

    // Hapus session setelah alert ditampilkan
    <?php unset($_SESSION['tambah_success']); ?>
    <?php unset($_SESSION['tambah_message']); ?>
    <?php unset($_SESSION['tambah_error']); ?>
</script>

<!-- jQuery -->
<script src="template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template2/dist/js/adminlte.min.js"></script>
</body>
</html>