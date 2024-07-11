<?php
include "../../koneksi.php";

if(isset($_POST["update"])){
    $id = $_POST["id_prestasi"];
    $nama_prestasi = $_POST["nama_prestasi"];
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
            echo
            "
            <script> 
                alert('Invalid Image Extension'); 
                document.location.href = 'edit_prestasi.php?id=$id';
            </script>
            ";
            exit;
        } else if($fileSize > 1000000){
            echo
            "
            <script> 
                alert('Image Size Is Too Large'); 
                document.location.href = 'edit_kegiatan.php?id=$id';
            </script>
            ";
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

    $query = "UPDATE prestasi SET nama_prestasi = '$nama_prestasi', gambar = '$newImageName' WHERE id_prestasi = '$id'";
    mysqli_query($koneksi, $query);
    echo
    "
    <script>
        alert('Successfully Updated');
        document.location.href = '../halaman_admin.php?page=prestasi';
    </script>
    ";
}
?>
