<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nama_pemesan  = $_POST['nama_pemesan'];
$email         = $_POST['email'];
$nomor_hp         = $_POST['nomor_hp'];
$nama_tamu     = $_POST['nama_tamu'];
$check_in      = $_POST['cek_in'];
$check_out     = $_POST['cek_out'];
$jumlah        = $_POST['jumlah'];
$room_tipe     = $_POST['room_tipe'];
// query SQL untuk insert data
$query = "INSERT INTO pemesanan SET nama_pemesan ='$nama_pemesan', nomor_hp ='$nomor_hp', email ='$email', nama_tamu ='$nama_tamu', check_in ='$cek_in', check_out ='$cek_out', jumlah_kamar ='$jumlah', tipe_kamar ='$room_tipe'";
mysqLi_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>