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
            <p>Masuk Untuk Melanjutkan</p>
        </div>
        <form action="proseslogin.php" method="post">
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
                <input type="text" name="username" id="username" placeholder="Contoh: ADMINXXX" required>
            </div>

            <div class="input">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Contoh: UNV9XXXX9" required>
            </div>

            <div class="input" id="lupapass">
                <p><a href="#">Lupa Password</a></p>
            </div>

            <div class="input">
                <input type="submit" value="LOGIN">
            </div>

            <div class="input" id="alert1">
                <p>Belum Punya Akun ? <a href="register.php">DAFTAR SEKARANG</a></p>
            </div>

        </form>

    </div>
</body>

</html>