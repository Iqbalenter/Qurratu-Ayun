<?php 
	include '../../koneksi.php';

	$id_guru = $_GET['id'];

	$query = "DELETE from guru where id_guru = '$id_guru'";
	mysqLi_query ($koneksi, $query);

	header("location:../halaman_admin.php?page=guru");
 ?>