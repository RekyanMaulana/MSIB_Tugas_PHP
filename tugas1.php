<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 1 PHP</title>
</head>
<body>
    <div class="card">
        <span class="heading">KELILING JAJAR GENJANG</span>
        <form method="POST"> 
            <label>Sisi 1 : </label>
            <input placeholder="Enter Number" name="sisi1" type="text">
            <label>Sisi 2 : </label>
            <input placeholder="Enter Number" name="sisi2" type="text">
            <input type="submit" class="button" value="Hitung Keliling" name="keliling">
            <label>
            <?php
            if(isset($_POST['keliling'])){
            $sisi1 = $_POST['sisi1'];
            $sisi2 = $_POST['sisi2'];

            $keliling = 2 * ($sisi1 + $sisi2);
            echo 'Keliling Jajar Genjang';
            echo '<br> Diketahui :';
            echo '<br> Sisi 1 : '.$sisi1;
            echo '<br> Sisi 2 : '.$sisi2;
            echo '<br>Keliling : ' .$keliling;
            }
        ?>
        </label>
        </form>
    </div>
    <div class="card">
        <span class="heading">LUAS JAJAR GENJANG</span>
        <form method="POST"> 
            <label>Alas : </label>
            <input placeholder="Enter Number" name="alas" type="text">
            <label>Tinggi : </label>
            <input placeholder="Enter Number" name="tinggi" type="text">
            <input type="submit" class="button" value="Hitung Luas" name="luas">
            <label>
            <?php
            if(isset($_POST['luas'])){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $luas = $alas * $tinggi;
            echo 'Luas Jajar Genjang';
            echo '<br> Diketahui :';
            echo '<br> Alas : '.$alas;
            echo '<br> Tinggi : '.$tinggi;
            echo '<br>Luas : ' .$luas;
            }
        ?>
        </label>
        </form>
    </div>
</body>
</html>