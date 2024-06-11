<p id="judulreport">Report Acara</p>
<div>

</div>
<table>
    <tr id="tablehead">
        <td>ID</td>
        <td>NAMA</td>
        <td>LOKASI</td>
        <td>HARGA TICKET</td>
        <td>ACTION</td>
    </tr>

    <?php
    include '../../koneksi.php';

    $nama_table = 'acara';
    $sql = "SELECT *FROM $nama_table ";
    $rs = $conn->execute_query($sql);

    if ($rs->num_rows > 0) {
        while ($row = $rs->fetch_assoc()) {
            ?>

            <tr id="tablecontent">
                <td><?=$row["ID"] ?></td>
                <td><?=$row["NAMA"] ?></td>
                <td><?=$row["LOKASI"] ?></td>
                <td><?= "Rp " . $row["HARGA_TICKET"] ?></td>
                <td>
                    <a href="hapus.php?id=<?= $row["ID"] ?>&namatable=<?= $nama_table ?>">Hapus</a>
                    |
                    <a href="formeditacara.php?id=<?=$row["ID"]?>">Edit</a>
                </td>
            </tr>

            <?PHP
        }
    }
    ?>
</table>