<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Guru</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../template2/dist/css/adminlte.min.css">
</head>
<body class="bg-dark">
  <section class="content mx-5 my-5">
    <div class="container-fluid">
          <div class="card bg-light">
            <div class="card-header">
              <h3 class="card-title">Tambahkan Data Guru</h3>
            </div>
            <form action="upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputNamaGuru">Nama Guru</label>
                  <input type="text" name="nama_guru" class="form-control" id="exampleInputNamaGuru" placeholder="Masukkan Nama Guru">
                </div>
                <div class="form-group">
                  <label for="exampleInputMapel">Mata Pelajaran</label>
                  <input type="text" name="mapel" class="form-control" id="exampleInputMapel" placeholder="Masukkan Mata Pelajaran">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Masukkan Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPendidikanTerakhir">Pendidikan Terakhir</label>
                  <select name="pendidikan_terakhir" class="form-control" id="exampleInputPendidikanTerakhir" placeholder="pilih tingkatan">
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputUniversitas">Universitas</label>
                  <input type="text" name="universitas" class="form-control" id="exampleInputUniversitas" placeholder="Masukkan Universitas">
                </div>
                <div class="form-group">
                  <label for="exampleInputKeteranganGuru">Keterangan Guru</label>
                  <textarea type="text" name="ket_guru" class="form-control" id="exampleInputKeteranganGuru" rows="10" placeholder="Masukkan Keterangan Guru"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Upload Gambar</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="gambar" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <button type="submit" name="proses" value="proses" class="btn btn-success">SIMPAN</button>
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
  <!-- AdminLTE for demo purposes -->
  <script src="../../template2/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function () {
      bsCustomFileInput.init();
    });
  </script>
</body>
</html>
