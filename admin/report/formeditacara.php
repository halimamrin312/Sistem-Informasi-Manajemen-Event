<style>
    .main-content {
    max-height: 100vh;
    padding: 50px;
    text-align: center;

    border-radius: 10px;
    border: 1px solid#aab3df86;
    background-color: white;
}

.main-content form {
    margin: auto auto auto auto;
    display: flex;
    flex-direction: column;
    max-width: 25vw;
}

.main-content input {
    padding: 10px;
}
</style>
<div class="main-content" id="content">
    <?PHP
    $id = $_GET['id'];
    ?>

    <!-- CONTENT DISINI HEHE -->
    <form action="proseseditacara.php?id=<?=$id?>" method="post">
        <p id="judulform">Edit Acara</p>
        <p id="judulid"> ID = <?= $id ?></p>
        <input type="text" name="nama" id="nama" placeholder="Nama Acara" required>
        <input type="text" name="lokasi" id="lokasi" placeholder="Lokasi Acara" required>
        <input type="number" name="hargaticket" id="hargaticket" placeholder="Harga Ticket" required>
        <input type="submit" value="SUBMIT">
    </form>

</div>