<?php
include '../../koneksi.php';

$id = $_POST['id'];
$id_peserta = $_POST['id_peserta'];
$id_acara = $_POST['id_acara'];
$date = $_POST['date'];
// echo $nama;
$sql_cek_duplicate = "SELECT id FROM pendaftaran where id = '$id' ";
$result_duplicate = $conn->query($sql_cek_duplicate);

$sql_action = "INSERT INTO pendaftaran VALUES 
('$id','$id_peserta','$id_acara','$date')";

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