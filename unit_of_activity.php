<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container bg-dark text-white">
    <?php
        $perolehan=null;
        $residu=null;
        $pemakaian = null;
        $kapasitas_max=null;
        if (isset($_GET['perolehan'])) {
            $perolehan=$_GET['perolehan'];
            $residu=$_GET['residu'];
            $pemakaian=$_GET['pemakaian'];
            $kapasitas_max=$_GET['kapasitas_max'];
            $hasil=0;
                    $hasil = ($perolehan - $residu) * ($pemakaian / $kapasitas_max);
        }
    ?>
    <div class="rows">
        <form action="unit_of_activity.php" method="get">
            <h2><b><center> Perhitungan Metode Unit of Activity</center></b></h2>
            <center><div class="form-group">
                <label>Harga Perolehan:</label>
                <input type="text" name="perolehan" value="<?php echo $perolehan; ?>" required>
            </div></center>
            <center><div class="form-group">
                <label>Nilai Residu:</label>
                <input type="text" name="residu" value="<?php echo $residu; ?>"  required>
            </div>
            <center><div class="form-group">
                <label>Pemakaian:</label>
                <input type="text" name="pemakaian" value="<?php echo $pemakaian; ?>"  required>
            </div></center>
            <center><div class="form-group">
                <label>Kapasitas Maksimal:</label>
                <input type="text" name="kapasitas_max" value="<?php echo $kapasitas_max; ?>"  required>
            </div></center>
            <center>
            <button type="button" class="btn btn-danger" onclick="location.href='index.php'">Back</button>
            <button type="submit" class="btn btn-primary">Hitung</button></center>
        </form>
        <br>
        <?php
            if (isset($_GET['perolehan'])) {
                $hasil = "Hasil depresiasi menggunakan metode Unit of Activity adalah " .number_format($hasil,0,',','.');
                echo "<h1>$hasil</h1>" ;
            }
        ?>
    </div>
</div>
</body>
</html>