<?php
session_start();

// Periksa apakah session login petugas sudah ada
if (!isset($_SESSION['id'])) {
    // Jika belum ada, redirect ke halaman login
    header('Location: ../login_petugas.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Qurratu A'yun</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../template2/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../template2/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../template2/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../template2/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/css/themify-icons.css">


</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="halaman_admin.php" class="brand-link">
      <img src="../assets/img/logo/logo2.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">QURRATU A'YUN</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/gallery/team2.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="?page=kegiatan" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Kegiatan Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=fasilitas" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Fasilitas Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=guru" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Guru Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=prestasi" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Prestasi Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=kontak" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Kontak Sekolah
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                LogOut
              
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>QURRATU A'YUN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
  <?php
  if (!empty(@$_GET['page'])){
    switch (@$_GET['page']) {
      case 'kegiatan':
        include 'kegiatan/kegiatan1.php';
        break;
      case 'guru':
        include 'guru/guru1.php';
        break;
      case 'prestasi':
        include 'prestasi/prestasi.php';
        break;
      case 'fasilitas':
        include 'fasilitas/fasilitas.php';
        break;
      case 'kontak':
        include 'kontak/kontak.php';
        break;
      default:
        echo "SELAMAT DATANG ADMIN SEKOLAH QURRATU A'YUN";
        break;
    }
  }
  ?>

</section>
</div>

  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2024 <a href="index.php">Qurratu A'yun</a>.</strong> Sekolah Kesayangan Anda
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../template2/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../template2/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../template2/dist/js/demo.js"></script>
<!-- DataTables  & Plugins -->
<script src="../template2/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../template2/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../template2/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../template2/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../template2/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../template2/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../template2/plugins/jszip/jszip.min.js"></script>
<script src="../template2/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../template2/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../template2/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../template2/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../template2/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
