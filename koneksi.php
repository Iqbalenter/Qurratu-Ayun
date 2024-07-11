<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "qurratu_a'yun";

$koneksi = mysqLi_connect("localhost","root","","qurratu_a'yun");

//cek koneksi
if (mysqLi_connect_error()){
	echo "koneksi database gagal : ". mysqLi_connect_error();
}

?>