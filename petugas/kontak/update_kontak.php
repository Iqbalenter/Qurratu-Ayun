<?php
include "../../koneksi.php";

if(isset($_POST["update"])){
    $kota = $_POST["kota"];
    $alamat = $_POST["alamat"];
    $telepon = $_POST["telepon"];
    $email = $_POST["email"];

    $query = "UPDATE kontak SET kota = '$kota', alamat = '$alamat', telepon = '$telepon', email = '$email'";
    mysqli_query($koneksi, $query);
    echo
    "
    <script>
        alert('Successfully Updated');
        document.location.href = '../halaman_admin.php?page=kontak';
    </script>
    ";
}
?>
