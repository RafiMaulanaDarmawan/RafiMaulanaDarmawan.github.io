<?php

require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Bukti Pemesanan</title>
</head>
<body>
      <h1>Bukti pemesanan</h1>
      <table border="1" cellpadding="10" cellspacing="0">

   <tr>
     <th>Nama pemesan</th>
     <th>Jumlah Kamar</th>
     <th>Tanggal Chek-in</th>
     <th>Tanggal Chek-out</th>
   </tr>';
                   include 'koneksi.php';
                    $data = mysqli_query($koneksi, "select * from pesanan where id_pesanan");
                    while($d = mysqli_fetch_array($data)){
                        $html .= '<tr>
                        <td>'.  $d ['nama_tamu'] .'</td>
                        <td>'.  $d ['jml_kamar'] .'</td>
                        <td>'. $d ['cek_in'] .'</td>
                        <td>'. $d ['cek_out'] .'</td>
                        </tr>';
                    }
   $html .= '</table>
   </body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();
?>
