<?php
    $program_studi = ["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika","ILKOM"=>"Ilmu Komputer","TE"=>"Teknik Elektro"];
    $skill_programming = ["HTML"=>10,"CSS"=>10, "Javascript"=>20, "RWD Bootstrap"=>20, "PHP"=>30, "MySQL"=>30, "Laravel"=>40];
?>
<body>
<fieldset class="f1">
    <table>
        <thead>
            <h2>
                Form Registrasi
</h2>
        </thead>
        <tbody>
            <form method="POST">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nim" class="inp">
                    </td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" class="inp">                        
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" value="L">Laki-Laki &nbsp;
                        <input type="radio" name="jk" value="P">Perempuan                        
                    </td>
                </tr>
                <tr>
                    <td>Program Studi</td>
                    <td>:</td>
                    <td>
                        <select name="prodi">
                            <?php
                            foreach($program_studi as $prodi => $p){
                                ?>
                                <option value="<?= $prodi ?>"><?= $p ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Skill Programming</td>
                    <td>:</td>
                    <td>
                        <?php
                        foreach ($skill_programming as $skill => $s){
                            ?>
                            <input type="checkbox" name="skill[]" value="<?= $skill ?>"> <?= $skill ?>
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>
                        <input type="email" name="email" class="inp">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td align="right">
                        <button name="proses">Submit</button>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
</fieldset>

<?php
    error_reporting(0);
    if(isset($_POST['proses'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
        $email = $_POST['email'];
    }
    $skor = 0;
    foreach($skill as $s){
        if(isset($skill_programming[$s])){
            $skor += $skill_programming[$s];
        }
    }
    function kat_skor($skor){
        if($skor > 0 && $skor <= 40) $kategori ='Kurang';
        else if($skor > 40 && $skor <= 60) $kategori = 'Cukup';
        else if($skor > 60 && $skor <= 100) $kategori = 'Baik';
        else if($skor > 100 && $skor <= 160) $kategori = 'Sangat Baik';
        else $kategori = 'Tidak Memadai';
        return $kategori;
    }
    $kategori = kat_skor($skor);
?>

<fieldset class="f2">
    <table>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td> <?= $nim ?> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td> <?= $nama ?> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td> <?= $jk ?> </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td> <?= $prodi ?> </td>
        </tr>
        <tr>
            <td>Skill Programming</td>
            <td>:</td>
            <td>
                <?php
                foreach($skill as $s){ ?>
                <?= $s ?>,
                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>Skor</td>
            <td>:</td>
            <td> <?= $skor ?> </td>
        </tr>
        <tr>
            <td>Kategori Skill</td>
            <td>:</td>
            <td> <?= $kategori ?> </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td> <?= $email ?> </td>
        </tr>
    </table>
</fieldset>
</body>

<style>
    body{
        background: #000000;
    }
    .f1{
        margin-top: 4%;
        color: white;
        margin-left: 20%;
        background: #000000;
        width: 60%;
        border: 2px solid #125AFF ;
        border-radius: 10% 100% 0% 0%;
    }
    .f2{
        margin-left: 20%;
        background: #000000;
        width: 60%;
        border: 2px solid #125AFF ;
        border-radius: 0% 0% 30% 10%;
    }
    .f1 table{
        color: white;
    }
    .f2 table{
        color: white;
    }
    select{
        border: 2px solid #125AFF;
    }
    .inp {
    background-color: #212121;
    max-width: 190px;
    height: 30px;
    border: 2px solid white;
    border-radius: 5px;
    }

    .inp:focus {
    color: #125AFF;
    background-color: #212121;
    outline-color: #125AFF;
    box-shadow: -3px -3px 15px #125AFF;
    transition: .1s;
    transition-property: box-shadow;
    }

    button {
    padding: 5px 10px;
    border-radius: 50px;
    border: 0;
    background-color: white;
    box-shadow: #125AFF 0 0 8px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 12px;
    transition: all .5s ease;
    }

    button:hover {
    letter-spacing: 3px;
    background-color: #125AFF;
    color: hsl(0, 0%, 100%);
    box-shadow: #125AFF 0px 7px 29px 0px;
    }

    button:active {
    letter-spacing: 3px;
    background-color: #125AFF;
    color: hsl(0, 0%, 100%);
    box-shadow: #125AFF 0px 0px 0px 0px;
    transform: translateY(10px);
    transition: 100ms;
    }
</style>