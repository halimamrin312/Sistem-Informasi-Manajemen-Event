<?php
include '../../koneksi.php';

$id = $_GET['id'];
$nama = $_POST['nama'];
$lokasi = $_POST['lokasi'];
$hargaticket = $_POST['hargaticket'];

$sql_action = "UPDATE acara SET nama = '$nama', lokasi = '$lokasi', harga_ticket = '$hargaticket' where id = '$id' ";

if ($conn->query($sql_action)) {
    // echo "<script>alert('Hello, world!');</script>";
    echo "<script>alert('Data berhasil di edit'); window.location.href = 'index.php';</script>";

} else {
    echo "Terdapat Kesalahan Mengedit Data Dengan ID : $id";
    echo "<br><a href='javascript:history.back()''>Kembali</a>";
}

?>