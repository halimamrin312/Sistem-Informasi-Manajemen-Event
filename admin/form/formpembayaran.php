<!-- CONTENT DISINI HEHE -->

<form action="simpanformpembayaran.php" method="post">
    <p id="judulform">Formulir Pendaftaran</p>

    <input type="number" name="id" id="id" placeholder="id Pembayaran" required>

    <select type="text" name="id_pendaftaran" id="id_pendaftaran" placeholder="jeniskelamin" required>
        <option value="" disabled selected>Pilih ID pendaftaran</option>
        <?php
        include '../../koneksi.php';
        $sql = "SELECT id FROM pendaftaran";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<option value='" . $row['id'] . "'>" . $row['id'] . "</option>";
            }
        } else {
            echo "Id Tidak ditemukan, cek database";
        }
        ?>
    </select>


    <input type="number" name="jumlahpembayaran" id="jumlahpembayaran" placeholder="jumlah pembayaran" required>

    <select name="metode" id="metode" required>
        <option value="" disabled selected>Pilih Metode Pembayaran</option>
        <option value="CASH">CASH</option>
        <option value="ONLINE">ONLINE</option>
    </select>

    <input type="date" name="date" id="date" placeholder="Tanggal Pendaftaran" required>

    <input type="submit" value="SUBMIT">

</form>