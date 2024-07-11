<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Prestasi Sekolah Qurratu A'yun</h3>
                <div class= "col-sm-12">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="prestasi/tambah_prestasi.php">Tambah Prestasi</a></li>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Prestasi</th>
                    <th>Gambar Prestasi</th>
                    <th>Keterangan Prestasi</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqLi_query($koneksi, "SELECT * FROM prestasi");
                    while($row = mysqLi_fetch_array($query)) {
                      
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_prestasi'] ?></td>
                    <td><?php echo $row ['ket_prestasi'] ?></td>
                    <td><img src="../assets/img/<?php echo $row ["gambar"]; ?>" width = 200 title="<?php echo $row ['gambar']; ?>"></td>
                    <td>
                      <a href="prestasi/edit_prestasi.php?id=<?php echo $row['id_prestasi']?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $row['id_prestasi']; ?>)">HAPUS</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
function confirmDelete(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'prestasi/hapus_prestasi.php?id=' + id;
        }
    });
}
</script>