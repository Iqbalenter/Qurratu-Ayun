<div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kontak Sekolah Qurratu A'yun</h3>
                <div class= "col-sm-12">
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>Kota</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
                    include('../koneksi.php');
                    $no = 1;
                    $query = mysqLi_query($koneksi, "SELECT * FROM kontak");
                    while($row = mysqLi_fetch_array($query)) {
                      
                    ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row ['kota'] ?></td>
                    <td><?php echo $row ['alamat'] ?></td>
                    <td><?php echo $row ['telepon'] ?></td>
                    <td><?php echo $row ['email'] ?></td>
                    <td>
                      <a href="kontak/edit_kontak.php?id=<?php echo $row['id_kontak']?>" class="btn btn-sm btn-primary">EDIT</a>
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>