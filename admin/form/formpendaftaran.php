<!-- CONTENT DISINI HEHE -->

<form action="simpanformpendaftaran.php" method="post">
    <p id="judulform">Formulir Pendaftaran</p>
    
    <input type="number" name="id" id="id" placeholder="id Pendaftaran" required>

    <select type="text" name="id_peserta" id="id_peserta" placeholder="jeniskelamin" required>
        <option value="" disabled selected>Pilih ID Peserta</option>
        <?php
        include '../../koneksi.php';
        $sql = "SELECT id FROM peserta";
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
    
    <select type="text" name="id_acara" id="id_acara" placeholder="jeniskelamin" required>
        <option value="" disabled selected>Pilih ID acara</option>
        <?php
        include '../../koneksi.php';
        $sql = "SELECT id FROM acara";
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

        <input type="date" name="date" id="date" placeholder="Tanggal Pendaftaran" required>

    <input type="submit" value="SUBMIT">

</form>