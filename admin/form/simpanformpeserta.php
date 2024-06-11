<?php
include '../../koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jeniskelamin = $_POST['jeniskelamin'];
$email = $_POST['email'];
// echo $nama;
$sql_cek_duplicate = "SELECT id FROM peserta where id = '$id' ";
$result_duplicate = $conn->query($sql_cek_duplicate);

$sql_action = "INSERT INTO peserta VALUES ('$id','$nama','$alamat','$jeniskelamin','$email')";

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