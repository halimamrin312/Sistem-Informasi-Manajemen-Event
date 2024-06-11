<?PHP
include '../../koneksi.php';

$id = $_GET['id'];
$namatable = $_GET['namatable'];

$sql = "DELETE FROM $namatable WHERE ID = $id ";

if ($conn->execute_query($sql)){
    echo "<script>alert('Data berhasil dihapus'); window.location.href = 'index.php';</script>";
}else{
    echo "Terdapat Kesalahan Menghapus Data Dengan ID : $id";
    echo "<br><a href='javascript:history.back()''>Kembali</a>";
}
?>