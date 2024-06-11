<?php
include '../../koneksi.php';

$id = $_POST['id'];
$id_pendaftaran = $_POST['id_pendaftaran'];
$jumlahpembayaran = $_POST['jumlahpembayaran'];
$metode = $_POST['metode'];
$date = $_POST['date'];
// echo $nama;
$sql_cek_duplicate = "SELECT id FROM pembayaran where id = '$id' ";
$result_duplicate = $conn->query($sql_cek_duplicate);

$sql_action = "INSERT INTO pembayaran VALUES 
('$id','$id_pendaftaran','$jumlahpembayaran','$metode','$date')";

if ($result_duplicate->num_rows > 0) {
    echo "Terdapat Duplikasi Data Dengan ID : $id, Silahkan Gunakan ID yang Lain";
    echo "<br><a href='javascript:history.back()''>Kembali</a>";
} else {
    if ($conn->query($sql_action)) {
        // echo "<script>alert('Hello, world!');</script>";
        echo "<script>alert('Data berhasil disimpan'); window.location.href = 'index.php';</script>";

    } else {
        echo "Terdapat Kesalahan Menyimpan Data Dengan ID : $id";
        echo "<br><a href='javascript:history.back()''>Kembali</a>";
    }
}

?>