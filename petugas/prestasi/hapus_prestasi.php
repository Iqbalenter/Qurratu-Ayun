<?php 
	include '../../koneksi.php';

	$id_prestasi = $_GET['id'];

	$query = "DELETE from prestasi where id_prestasi = '$id_prestasi'";
	mysqLi_query ($koneksi, $query);

	header("location:../halaman_admin.php?page=prestasi");
 ?>