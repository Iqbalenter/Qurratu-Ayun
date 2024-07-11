<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Kegiatan Sekolah Qurratu A'yun</h3>
        <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="kegiatan/tambahkegiatan.php">Tambah Kegiatan</a></li>
            </ol>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tingkatan</th>
                    <th>Nama Kegiatan</th>
                    <th>Keterangan</th>
                    <th>Gambar Kegiatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include('../koneksi.php');
                $no = 1;
                $query = mysqli_query($koneksi, "SELECT * FROM kegiatan");
                while($row = mysqli_fetch_array($query)) {    
                ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['tingkatan'] ?></td>
                    <td><?php echo $row['nama_kegiatan'] ?></td>
                    <td><?php echo $row['ket_kegiatan'] ?></td>
                    <td><img src="../assets/img/<?php echo $row['gambar']; ?>" width="200" title="<?php echo $row['gambar']; ?>"></td>
                    <td>
                        <a href="kegiatan/edit_kegiatan.php?id=<?php echo $row['id_kegiatan']?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="javascript:void(0)" class="btn btn-sm btn-danger" onclick="confirmDelete(<?php echo $row['id_kegiatan']; ?>)">HAPUS</a>
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
            window.location.href = 'kegiatan/hapus_kegiatan.php?id=' + id;
        }
    });
}
</script>
