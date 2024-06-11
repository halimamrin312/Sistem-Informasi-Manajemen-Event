<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title></title>
</head>

<body>
    <script src="../script.js"></script>
    <div class="header">
        <div class="logo">
            <img src="https://picsum.photos/25/25" alt="lgo 25 x 25">
            <a href="#">
                <p>SISTEM INFORMASI MANAJEMEN EVENT</p>
            </a>
        </div>

        <div class="navigation">
            <a href="../form/index.php" >
                <p>FORM</p>
            </a>
            <a href="../report/index.php" id="selected">
                <p>REPORT</p>
            </a>
            <a href="../../index.php">
                <p>KELUAR</p>
            </a>
        </div>

    </div>

    <div class="main">
        <div class="main-nav">
            
            <a href="javascript:void(0);" onclick="loadReportAcara()">
                <p>Report Acara</p>
            </a>
            <a href="javascript:void(0);" onclick="loadReportPeserta()">
                <p>Report Peserta</p>
            </a>
            <a href="javascript:void(0);" onclick="loadReportPendaftaran()">
                <p>Report Pendaftaran</p>
            </a>
            <a href="javascript:void(0);" onclick="loadReportPembayaran()">
                <p>Report Pembayaran</p>
            </a>

            <!-- <a href="javascript:void(0);" onclick="loadFormDuplicate()">
                <p>Test Allert</p>
            </a> -->
            <!-- <script>
                loadFormDuplicate();
            </script> -->
            
        </div>

        <div class="main-content" id="content">
            <!-- CONTENT DISINI HEHE -->
        </div>
    </div>

    <div class="footer">
        <p>&COPY 2024 - Muhamamad Halim Amrin</p>
    </div>
</body>

</html>