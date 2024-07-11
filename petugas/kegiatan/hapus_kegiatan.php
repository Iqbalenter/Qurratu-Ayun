<?php 
	include '../../koneksi.php';

	$id_kegiatan = $_GET['id'];

	$query = "DELETE from kegiatan where id_kegiatan = '$id_kegiatan'";
	mysqLi_query ($koneksi, $query);

	header("location:../halaman_admin.php?page=kegiatan");
 ?>