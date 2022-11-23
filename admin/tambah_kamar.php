<?php
include '../koneksi.php';

$type_kamar = $_POST['type_kamar'];
$foto = $_FILES['foto']['name'];
$harga_kamar=$_POST['harga_kamar'];

if ($foto !="") {
	$ekstensi_diperbolehkan = array('png','jpg','jpeg');
	$x = explode('.', $foto);
	$extensi = strtolower(end($x));
	$file_tmp = $_FILES['foto']['tmp_name'];
	$angka_acak = rand(1,999);
	$nama_gambar_baru = $angka_acak.'-'.$foto;
	if (in_array($extensi, $ekstensi_diperbolehkan) == true) {
		move_uploaded_file($file_tmp, 'gambar/'.$nama_gambar_baru);
		$query = "INSERT INTO kamar (type_kamar,foto,harga_kamar) VALUES ('$type_kamar', '$nama_gambar_baru','$harga_kamar')";
		$result = mysqli_query($koneksi, $query);

		if (!$result) {
			die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
		} else {
			echo "<script>alert('Data berhasil ditambah.');window.location='kamar.php';</script>";
		}
		
	} else {
		echo "<script>alert('Extensi gambar harus png atau jpg.');window.location='kamar.php';</script>";
	}
	
} else {
	$query = "INSERT INTO kamar (type_kamar,foto) VALUES ('$type_kamar', null)";
	$result = mysqli_query($koneksi, $query);

	if (!$result) {
		die("Query gagal dijalankan : ".mysqli_errno($koneksi)."-".mysqli_error($koneksi));
	} else {
		echo "<script>alert('Data berhasil ditambah.');window.location='kamar.php';</script>";
	}
}

?>