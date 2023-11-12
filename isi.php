<?php
//menghubungkan ke database
require 'koneksi.php';
//buat variable $keyword dari field input
$keyword = $_GET['keyword'];
//lakukan query simpan di $row
$row = mysqli_query($kon, "SELECT * FROM tiket WHERE kode = '$keyword'");

// Periksa apakah ada hasil dari query
//jika jumlah row yang mengandung data lebih besar dari 0 alias ada
if (mysqli_num_rows($row) > 0) {
    $data = mysqli_fetch_assoc($row);
    echo 'kode valid!';
   
}
// jika tidak ada
else {
    echo 'kode tidak valid!';
}

?>