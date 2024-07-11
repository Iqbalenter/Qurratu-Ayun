<?php
session_start();
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    $sql = "SELECT * FROM petugas WHERE username = '$username'";
    $result = mysqli_query($koneksi, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['jabatan'] = $row['jabatan'];
            $_SESSION['login_success'] = true; // Tandai bahwa login berhasil
        } else {
            $_SESSION['login_error'] = "Username atau password salah.";
        }
    } else {
        $_SESSION['login_error'] = "Username atau password salah.";
    }

    mysqli_close($koneksi);
    header("location: login_petugas.php"); // Arahkan kembali ke halaman login
    exit();
}
?>
