<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (mysqli_connect_errno()) {
    echo ('Connect Eror(' . mysqli_connect_errno() . ')' . mysqli_connect_error() . ' ');
} else {
    $result = mysqli_query($conn, "SELECT *from user where username = '$username'  and password = '$password' ");
    $cek = mysqli_num_rows($result);

    if (mysqli_num_rows($result) > 0){
        header('Location: admin/form/index.php');
    }
    else{
        echo "GAGAL LOGIN";
    }
}


?>