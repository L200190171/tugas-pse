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
    ?>
    <div class="rows">
        <form action="reducing_balance.php" method="get">
            <h2><b><center> Perhitungan Metode Reducing Balance</center></b></h2>
            <center><div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required>
            </div></center>
            <center><div class="form-group">
                <label>Umur Ekonomis (Tahun):</label>
                <input type="text" name="umur" value="<?php echo $umur; ?>"  required>
            </div></center>
            <center>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button></center>
        </form>
        <br>
        
        <?php
            if (isset($_GET['perolehan'])) {
                $perolehan=$_GET['perolehan'];
                $umur=$_GET['umur'];
                $hasil = ($perolehan / $umur) * 2;
                $hasila = "Hasil depresiasi menggunakan metode reducing balance pada tahun pertama adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasila</h1>";
                for ($i=2; $i <= $umur; $i++) { 
                    $hasill = (($perolehan-$hasil) / $umur) * 2;
                    $hasilla = "Hasil depresiasi menggunakan metode reducing balance pada tahun ke " .$i. " adalah " .number_format($hasill,0,',','.');
                    echo "<h1>$hasilla</h1>";
                    $perolehan = $perolehan - $hasill;
                    $hasill = ($perolehan/$umur)*2;
                }
            }
        ?>
    </div>
</div>
</body>
</html>