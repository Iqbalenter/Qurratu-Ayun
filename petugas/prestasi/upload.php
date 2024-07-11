<?php
include "../../koneksi.php";

if(isset($_POST["proses"])){
	$nama_prestasi = $_POST["nama_prestasi"];
	$ket_prestasi = $_POST["ket_prestasi"];


	if($_FILES["gambar"]["error"] == 4){
		echo 
		"<script> 
        alert('Image Does Not Exist');
        document.location.href = 'tambah_prestasi.php'; 
        </script>"
		;
	}
	else{
		$fileName = $_FILES["gambar"]["name"];
		$fileSize = $_FILES["gambar"]["size"];
		$tmpName = $_FILES["gambar"]["tmp_name"];

		$validImageExtension = ['jpg','jpeg', 'png'];
		$imageExtension = explode('.', $fileName);
		$imageExtension = strtolower(end($imageExtension));
		if ( !in_array($imageExtension, $validImageExtension)){
			echo
			"
			<script> 
				alert('Invalid Image Extension');
                document.location.href = 'tambah_prestasi.php';  
			</script>
			";
		}
		else if($fileSize > 1000000){
			echo
			"
			<script> 
				alert('Image Size Is Too Large');
                document.location.href = 'tambah_prestasi.php';  
			</script>
			";
		}
		else{
			$newImageName = uniqid();
			$newImageName .= ''.$imageExtension;

			move_uploaded_file($tmpName, '../../assets/img/' .$newImageName);
			$query = " INSERT INTO prestasi VALUES('.', '$nama_prestasi', '$ket_prestasi','$newImageName')";
			mysqli_query($koneksi, $query);
			echo
			"
			<script>
				alert('Successfully Added');
				document.location.href = '../halaman_admin.php?page=prestasi';
			</script>
			";
		}
	}
}
?>