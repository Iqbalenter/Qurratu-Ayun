<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Guru</title>
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
    $query = mysqli_query($koneksi, "SELECT * FROM guru WHERE id_guru = '$id'");
    $data = mysqli_fetch_array($query);
    ?>
    <section class="content mx-5 my-5">
        <div class="container-fluid">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data Guru</h3>
                        </div>
                        <form action="update_guru.php" method="POST" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_guru">Nama Guru</label>
                                    <input type="text" name="nama_guru" class="form-control" id="nama_guru" value="<?php echo $data['nama_guru']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMapel">Mata Pelajaran</label>
                                    <input type="text" name="mapel" class="form-control" id="mapel" value="<?php echo $data['mapel']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?php echo $data['email']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <select name="pendidikan_terakhir" class="form-control" id="pendidikan_terakhir">
                                        <option value="D2" <?php if($data['pendidikan_terakhir'] == 'D2') echo 'selected'; ?>>D2</option>
                                        <option value="D3" <?php if($data['pendidikan_terakhir'] == 'D3') echo 'selected'; ?>>D3</option>
                                        <option value="S1" <?php if($data['pendidikan_terakhir'] == 'S1') echo 'selected'; ?>>S1</option>
                                        <option value="S2" <?php if($data['pendidikan_terakhir'] == 'S2') echo 'selected'; ?>>S2</option>
                                        <option value="S3" <?php if($data['pendidikan_terakhir'] == 'S3') echo 'selected'; ?>>S3</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="universitas">Universitas</label>
                                    <input type="text" name="universitas" class="form-control" id="universitas" id="email" value="<?php echo $data['universitas']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="ket_guru">Keterangan Guru</label>
                                    <textarea type="text" name="ket_guru" class="form-control" id="ket_guru" rows="10"><?php echo $data['ket_guru']; ?></textarea>
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
                                <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>">
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

    <!-- jQuery -->
    <script src="../../template2/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../template2/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../../template2/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../template2/dist/js/adminlte.min.js"></script>
    <script>
    $(function () {
        bsCustomFileInput.init();
    });
    </script>
</body>
</html>
