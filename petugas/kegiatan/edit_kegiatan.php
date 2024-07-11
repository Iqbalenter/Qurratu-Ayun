<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kegiatan</title>
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
    $query = mysqli_query($koneksi, "SELECT * FROM kegiatan WHERE id_kegiatan = '$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <section class="content mx-5 my-5">
        <div class="container-fluid">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Kegiatan</h3>
                        </div>
                        <form action="update_kegiatan.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tingkatan">Tingkatan</label>
                                    <select name="tingkatan" class="form-control" id="tingkatan">
                                        <option value="tk" <?php if($data['tingkatan'] == 'tk') echo 'selected'; ?>>TK</option>
                                        <option value="sd" <?php if($data['tingkatan'] == 'sd') echo 'selected'; ?>>SD</option>
                                        <option value="smp" <?php if($data['tingkatan'] == 'smp') echo 'selected'; ?>>SMP</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                    <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="<?php echo $data['nama_kegiatan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="ket_kegiatan">Keterangan</label>
                                    <textarea type="text" name="ket_kegiatan" class="form-control" id="ket_kegiatan" rows="10"><?php echo $data['ket_kegiatan']; ?></textarea>
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
                                <input type="hidden" name="id_kegiatan" value="<?php echo $data['id_kegiatan']; ?>">
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
