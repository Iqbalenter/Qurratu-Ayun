<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Prestasi</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../template2/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../template2/dist/css/adminlte.min.css">
</head>
<body class="bg-dark">
    <?php
    include "../../koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM prestasi WHERE id_prestasi = '$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <section class="content mx-5 my-5">
        <div class="container-fluid">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Prestasi</h3>
                        </div>
                        <form action="update_prestasi.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_prestasi">Nama Prestasi</label>
                                    <input type="text" name="nama_prestasi" class="form-control" id="nama_prestasi" value="<?php echo $data['nama_prestasi']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputKeteranganPrestasi">Keterangan Prestasi</label>
                                    <textarea type="text" name="ket_prestasi" class="form-control" id="exampleInputKeteranganPrestasi" rows="10"><?php echo $data['ket_prestasi']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gambar">Upload Gambar</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="gambar" class="custom-file-input" id="gambar">
                                            <label class="custom-file-label" for="gambar">Choose file</label>
                                        </div>
                                    </div>
                                    <img src="../../assets/img/<?php echo $data['gambar']; ?>" width="100" alt="Current Image">
                                </div>
                                <input type="hidden" name="id_prestasi" value="<?php echo $data['id_prestasi']; ?>">
                                <input type="hidden" name="gambar_lama" value="<?php echo $data['gambar']; ?>">
                            </div>
                            <div class="card-footer">
                                <button type="submit" name="update" class="btn btn-success">UPDATE</button>
                                <a href="../halaman_admin.php" class="btn btn-danger">KEMBALI</a>
                            </div>
                        </form>
                    </div>

        </div>
    </section>
    <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy;
                                        <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                        This website is made by Universitas Harapan Student</a>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <script src="../../template2/plugins/jquery/jquery.min.js"></script>
    <script src="../../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <script src="../../template2/dist/js/adminlte.min.js"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
        });
    </script>
</body>
</html>
