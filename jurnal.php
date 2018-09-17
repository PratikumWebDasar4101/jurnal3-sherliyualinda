<?php
	//mengambil data file

$namaberkas =$_FILES['file']['name'];
$namaSementara =$_FILES['file']['tmp_name'];

// menentukan lokasi file yang akan dipindah

$fileUpload = "terUpload/";

//pindah file
$terUpload = move_uploaded_file($namaSementara, $fileUpload.$namaberkas);

if ($terUpload) {
	# code...
	echo "file berhasil di Upload<br>";
	echo "<img src='".$fileUpload.$namaberkas."'>"; //<img src='blabbla.jpg'>
}else{
	echo "file gagal di Upload";
}

?>
