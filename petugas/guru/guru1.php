<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Guru Sekolah Qurratu A'yun</h3>
                <div class= "col-sm-12">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="guru/tambah_guru.php">Tambah Guru</a></li>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Nama Guru</th>
                    <th>Mata Pelajaran</th>
                    <th>Email</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Universitas</th>
                    <th>Keterangan Guru</th>
                    <th>Gambar Guru</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqLi_query($koneksi, "SELECT * FROM guru");
                    while($row = mysqLi_fetch_array($query)) {
                      
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['nama_guru'] ?></td>
                    <td><?php echo $row ['mapel'] ?></td>
                    <td><?php echo $row ['email'] ?></td>
                    <td><?php echo $row ['pendidikan_terakhir'] ?></td>
                    <td><?php echo $row ['universitas'] ?></td>
                    <td><?php echo $row ['ket_guru'] ?></td>
                    <td><img src="../assets/img/<?php echo $row ["gambar"]; ?>" width = 200 title="<?php echo $row ['gambar']; ?>"></td>
                    <td>
                      <a href="guru/edit_guru.php?id=<?php echo $row['id_guru']?>" class="btn btn-sm btn-primary">EDIT</a>
                      <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $row['id_guru']; ?>)">HAPUS</a>
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
            window.location.href = 'guru/hapus_guru.php?id=' + id;
        }
    });
}
</script>