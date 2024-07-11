<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Kegiatan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../template2/plugins/fontawesome-free/css/all.min.css">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../template2/dist/css/adminlte.min.css">
</head>
<body class="bg-dark">
  <section class="content mx-5 my-5">
    <div class="container-fluid">
          <div class="card bg-light">
            <div class="card-header">
              <h3 class="card-title">Tambahkan Data Kegiatan</h3>
            </div>
            <form action="upload.php" method="POST" autocomplete="off" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputTingkatan">Tingkatan</label>
                  <select name="tingkatan" class="form-control" id="exampleInputTingkatan" placeholder="pilih tingkatan">
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputNamaKegiatan">Nama Kegiatan</label>
                  <input type="text" name="nama_kegiatan" class="form-control" id="exampleInputNamaKegiatan" placeholder="Masukkan Nama Kegiatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputKeterangan">Keterangan</label>
                  <textarea type="text" name="ket_kegiatan" class="form-control" id="exampleInputKeterangan" rows="10" placeholder="Masukkan Deskripsi Kegiatan"></textarea>
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
