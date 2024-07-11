<?php 
	include '../../koneksi.php';

	$id_fasilitas = $_GET['id'];

	$query = "DELETE from fasilitas where id_fasilitas = '$id_fasilitas'";
	mysqLi_query ($koneksi, $query);

	header("location:../halaman_admin.php?page=fasilitas");
 ?>