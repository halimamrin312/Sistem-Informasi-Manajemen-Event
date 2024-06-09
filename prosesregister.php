<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if (mysqli_connect_errno()) {
    echo ('Connect Eror(' . mysqli_connect_errno() . ')' . mysqli_connect_error() . ' ');
} else {
    $sql = "INSERT INTO user values('null','$username','$password','$level')";

    if ($conn ->query($sql) ){
        header('Location: index.php');
    }
    else{
        echo "GAGAL LOGIN";
    }

}


?>