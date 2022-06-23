<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $perolehan=null;
        $residu=null;
        $umur=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $umur=$_GET['umur'];
            $hasil=0;
            $hasil = ($perolehan-$residu)/$umur;  
        }
    ?>
    <div class="rows">
        <form action="straight_line.php" method="get">
            <h2><b><center> Perhitungan Metode Straight Line </center></b></h2>
            <center><div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required>
            </div></center>
            <center><div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" value="<?php echo $residu; ?>"  required>
            </div></center>
            <center><div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" value="<?php echo $umur; ?>"  required>
            </div></center>
            <center><button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button></center>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode straight line per tahunnya selama ". $umur . " tahun adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>