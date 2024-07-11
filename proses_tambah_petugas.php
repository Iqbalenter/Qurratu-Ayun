<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $jabatan = mysqli_real_escape_string($koneksi, $_POST['jabatan']);
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Periksa apakah username atau email sudah ada
    $checkPetugasQuery = "SELECT * FROM petugas WHERE username = '$username' OR email = '$email'";
    $result = mysqli_query($koneksi, $checkPetugasQuery);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['tambah_error'] = "Username atau email sudah ada. Silahkan gunakan yang lain.";
        mysqli_close($koneksi);
        header("location: tambah_petugas.php");
        exit();
    } else {
        // Tambahkan petugas baru ke database
        $sql = "INSERT INTO petugas (nama, jabatan, username, password, email) VALUES ('$nama', '$jabatan', '$username', '$password', '$email')";

        if (mysqli_query($koneksi, $sql)) {
            $_SESSION['tambah_success'] = true; // Tandai bahwa tambah petugas berhasil
            $_SESSION['tambah_message'] = "Petugas berhasil ditambahkan. Silahkan login.";
            mysqli_close($koneksi);
            header("location: login_petugas.php"); // Arahkan ke halaman admin setelah berhasil
            exit();
        } else {
            $_SESSION['tambah_error'] = "Error: " . $sql . "<br>" . mysqli_error($koneksi);
            mysqli_close($koneksi);
            header("location: tambah_petugas.php");
            exit();
        }
    }
}
?>