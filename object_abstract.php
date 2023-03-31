<body>
    <div class="card">
        <h2>Tugas 6</h2>
        <table>
            <thead>
                <tr>
                    <td>Nama Bidang</td>
                    <td>Luas Bidang</td>
                    <td>Keliling BIdang</td>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'lingkaran.php';
                    require_once 'persegi_panjang.php';
                    require_once 'segitiga.php';

                    $lingkaran = new Lingkaran(7);
                    $persegipanjang = new PersegiPanjang(10, 5);
                    $segitiga = new Segitiga(8, 5);

                    $ar_bidang = [$lingkaran, $persegipanjang, $segitiga];
                    foreach($ar_bidang as $bidang){
                        // $bidang->cetak();
                        echo '<tr>';
                            echo '<td>'.$bidang->namaBidang();
                            echo '<td>'.$bidang->luasBidang();
                            echo '<td>'.$bidang->kelilingBidang();
                        echo '</tr>';
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
<style>
    body{
        background: #000;
        display: flex;
        justify-content: center;
        margin-top: 5%;
    }
    .card{
        background: #000;
        border: 2px solid #FFF337;
        color: #FFF;
        width: 30%;
        height: 40%;
        padding-left: 2%;
        padding-right: 2%;
        padding-bottom: 2%;
    }
    h2{
        text-align: center;
    }
    table{
        color: #FFF;
    }
    table td{
        padding: 10px;
    }
</style>