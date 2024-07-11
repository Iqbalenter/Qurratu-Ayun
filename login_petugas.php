<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login Petugas | Qurratu A'yun</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template2/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template2/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template2/dist/css/adminlte.min.css">
  <!-- jQuery -->
  <script src="template2/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="template2/dist/js/adminlte.min.js"></script>
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.4/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.4/sweetalert2.min.js"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Qurratu A'yun</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Silahkan Login Sebagai Petugas</p>

      <?php
      session_start();
      if (isset($_SESSION['login_error'])) {
          echo '<div class="alert alert-danger">'.$_SESSION['login_error'].'</div>';
          unset($_SESSION['login_error']);
      }
      ?>

      <form id="loginForm" action="proses_login_petugas.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="username" class="form-control" placeholder="Username" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
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
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<script>
$(document).ready(function() {
  // Cek jika ada alert login berhasil dari session
  <?php
  if (isset($_SESSION['login_success']) && $_SESSION['login_success']) {
      echo "Swal.fire({
              icon: 'success',
              title: 'Login Berhasil!',
              text: 'Selamat datang, ".$_SESSION['nama']."!',
              showConfirmButton: false,
              timer: 2000
            }).then(function() {
              window.location.href = 'petugas/halaman_admin.php'; // Arahkan ke halaman selanjutnya setelah alert ditutup
            });";
      unset($_SESSION['login_success']);
  }
  ?>
});
</script>


</body>
</html>
