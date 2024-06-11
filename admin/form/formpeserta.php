<!-- CONTENT DISINI HEHE -->

<form action="simpanformpeserta.php" method="post">
    <p id="judulform">Formulir Peserta</p>
    <input type="number" name="id" id="id" placeholder="id" required>
    <input type="text" name="nama" id="nama" placeholder="Nama" required>
    <input type="text" name="alamat" id="alamat" placeholder="alamat" required>
    
    <select type="text" name="jeniskelamin" id="jeniskelamin" placeholder="jeniskelamin" required>
        <option value="" selected disabled>Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <input type="email" name="email" id="email" placeholder="Email" required>
    <input type="submit" value="SUBMIT">
</form>
