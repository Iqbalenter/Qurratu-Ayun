<?php
include "../../koneksi.php";

if(isset($_POST["proses"])){
	$nama_guru = $_POST["nama_guru"];
	$mapel = $_POST["mapel"];
	$email = $_POST["email"];
	$pendidikan_terakhir = $_POST["pendidikan_terakhir"];
	$universitas = $_POST["universitas"];
	$ket_guru = $_POST["ket_guru"];


	if($_FILES["gambar"]["error"] == 4){
		echo 
		"<script> alert('Image Does Not Exist'); </script>"
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
			</script>
			";
		}
		else if($fileSize > 1000000){
			echo
			"
			<script> 
				alert('Image Size Is Too Large'); 
			</script>
			";
		}
		else{
			$newImageName = uniqid();
			$newImageName .= ''.$imageExtension;

			move_uploaded_file($tmpName, '../../assets/img/' .$newImageName);
			$query = " INSERT INTO guru VALUES('.', '$nama_guru','$mapel','$email','$pendidikan_terakhir','$universitas','$ket_guru','$newImageName')";
			mysqli_query($koneksi, $query);
			echo
			"
			<script>
				alert('Successfully Added');
				document.location.href = '../halaman_admin.php?page=guru1';
			</script>
			";
		}
	}
}
?>