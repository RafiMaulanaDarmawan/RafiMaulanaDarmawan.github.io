<?php
include '../koneksi.php';

//mengambil id yang ingin dihapus
$id_pesanan = $_POST['id_pesanan'];
    //jalankan query DELETE untuk menghapus data
$query = "DELETE FROM pesanan WHERE id_pesanan='$id_pesanan' ";
$hasil_query = mysqli_query($koneksi, $query);

    //periksa query, apakah ada kesalahan
if(!$hasil_query) {
  die ("Gagal menghapus data: ".mysqli_errno($koneksi).
   " - ".mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='kamar.php';</script>";
}