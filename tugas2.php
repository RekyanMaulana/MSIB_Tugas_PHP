<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas 2 PHP</title>
</head>
<body>
    <div class="card">
    <form action="" method="post">
        <h2>Form Pegawai</h2>
        <label for="">Nama : </label>
        <input type="text" name="nama">
        <label for="">Jabatan : </label>
        <select name="jabatan" id="">
            <option value="Manager">Manager</option>
            <option value="Asisten">Asisten</option>
            <option value="Kabag">Kabag</option>
            <option value="Staff">Staff</option>
        </select>
        <label for="">Status : </label>
        <select name="status" id="">
            <option value="Menikah">Menikah</option>
            <option value="Belum Menikah">Belum Menikah</option>
        </select>
        <label for="">Jumlah Anak : </label>
        <input type="number" name="anak">
        <label for="">Agama : </label>
        <select name="agama" id="">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katholik">Katholik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select>
        <button type="submit" name="proses">Submit</button>
    </form>
    </div>
    <div class="card2">
        <h2>Rincian Gaji Pegawai</h2>
            <?php
            error_reporting(0);
                $nama = $_POST['nama'];
                $jabatan = $_POST['jabatan'];
                $status = $_POST['status'];
                $anak = $_POST['anak'];
                $agama = $_POST['agama'];
                $button = $_POST['proses'];

                //1. Tentukan gaji pokok (switch case)
                $gaji_pokok = 0;
                switch ($jabatan) {
                    case 'Manager':
                        $gaji_pokok = 20000000;
                        break;
                    case 'Asisten':
                        $gaji_pokok = 15000000;
                        break;
                    case 'Kabag':
                        $gaji_pokok = 10000000;
                        break;
                    case 'Staff':
                        $gaji_pokok = 4000000;
                        break;
                    default:
                        $gaji_pokok = 0;
                        break;
                }

                //2. Tentukan tunjangan jabatan = 20% dari gaji pokok
                $tunjangan_jabatan = 0.2 * $gaji_pokok;

                //3. Tentukan tunjangan keluarga (if multi kondisi)
                $tunjangan_keluarga = 0;
                if($status == 'Menikah' && $anak == 0) $tunjangan_keluarga = 0 * $gaji_pokok;
                else if ($status == 'Menikah' && $anak >= 1 && $anak <= 2) $tunjangan_keluarga = 0.05 * $gaji_pokok;
                else if ($status == 'Menikah' && $anak >= 3 && $anak <= 5) $tunjangan_keluarga = 0.1 * $gaji_pokok;
                else $tunjangan_keluarga = 0 * $gaji_pokok;

                //4. Tentukan gaji kotor
                $gaji_kotor = $gaji_pokok + $tunjangan_jabatan + $tunjangan_keluarga;

                //5. Tentukan zakat (ternary)
                $zakat = ($agama == 'Islam' && $gaji_kotor >= 6000000)? 0.025 * $gaji_kotor : 0 * $gaji_kotor;

                //6. Tentukan take home pay
                $thp = $gaji_kotor - $zakat;

                if(isset($button)){
            ?>
            <label>Nama : <?= $nama ?></label>
            <label>Jabatan : <?= $jabatan ?></label>
            <label>Status : <?= $status ?></label>
            <label>Jumlah Anak : <?= $anak ?></label>
            <label>Agama : <?= $agama ?></label>
            <label>Gaji Pokok : <?= $gaji_pokok ?></label>
            <label>Tunjangan Jabatan : <?= $tunjangan_jabatan ?></label>
            <label>Tunjangan Keluarga : <?= $tunjangan_keluarga ?></label>
            <label>Gaji Kotor : <?= $gaji_kotor ?></label>
            <label>Zakat : <?= $zakat ?></label>
            <label>Take Home Pay : <?= $thp ?></label>
            <?php } ?>
    </div>
</body>
</html>