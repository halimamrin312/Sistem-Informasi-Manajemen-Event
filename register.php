<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM LOGIN</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-content">
        <div class="header">
            <p>Daftar Untuk Melanjutkan</p>
        </div>
        <form action="prosesregister.php" method="post">
            <?php
            include 'koneksi.php';
            if (mysqli_connect_errno()) {
                echo ('Connect Eror(' . mysqli_connect_errno() . ')' . mysqli_connect_error() . ' ');
            } else {
                $result = mysqli_query($conn, "SELECT level FROM user");
            }
            ?>

            <div class="input">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Contoh: ADMINXXX">
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Contoh: UNV9XXXX9">
            </div>

            <div class="input">
                <label for="password">Level Account</label>
                <select id="level" name="level" required>
                    <option value="admin">Admin</option>
                    <option value="peserta">Peserta</option>
                </select>
            </div>

            <div class="input">
                <input type="submit" value="DAFTAR">
            </div>

            <div class="input" id="alert1">
                <p>Sudah Punya Akun ?<a href="index.php">LOGIN SEKARANG</a></p>
            </div>
        </form>

    </div>
</body>

</html>