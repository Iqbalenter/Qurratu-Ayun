<?php
include "../../koneksi.php";

if(isset($_POST["update"])){
    $id = $_POST["id_guru"];
    $nama_guru = $_POST["nama_guru"];
    $mapel = $_POST["mapel"];
    $email = $_POST["email"];
    $pendidikan_terakhir = $_POST["pendidikan_terakhir"];
    $universitas = $_POST["universitas"];
    $ket_guru = $_POST["ket_guru"];
    $gambar_lama = $_POST["gambar_lama"];

    if($_FILES["gambar"]["error"] == 4){
        $newImageName = $gambar_lama;
    } else {
        $fileName = $_FILES["gambar"]["name"];
        $fileSize = $_FILES["gambar"]["size"];
        $tmpName = $_FILES["gambar"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        if (!in_array($imageExtension, $validImageExtension)){
            echo "<script>alert('Invalid Image Extension'); document.location.href = 'edit_guru.php?id=$id';</script>";
            exit;
        } else if($fileSize > 1000000){
            echo "<script>alert('Image Size Is Too Large'); document.location.href = 'edit_guru.php?id=$id';</script>";
            exit;
        } else {
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, '../assets/img/' . $newImageName);
            if ($gambar_lama != 'default.png' && file_exists('../assets/img/' . $gambar_lama)) {
                unlink('../assets/img/' . $gambar_lama);
            }
        }
    }

    $query = "UPDATE guru SET nama_guru = '$nama_guru', mapel = '$mapel', email = '$email', pendidikan_terakhir = '$pendidikan_terakhir', universitas = '$universitas', ket_guru = '$ket_guru', gambar = '$newImageName' WHERE id_guru = '$id'";
    
    if(mysqli_query($koneksi, $query)){
        echo "<script>alert('Successfully Updated'); document.location.href = '../halaman_admin.php?page=guru';</script>";
    } else {
        echo "<script>alert('Failed to Update'); document.location.href = 'edit_guru.php?id=$id';</script>";
    }
}
?>
