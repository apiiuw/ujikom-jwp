<!DOCTYPE html>
<html>
    <head>
        <title>Nilai Mahasiswa Aplikasi Berbasis WEB @apiiuw</title>
    </head>
    <body>
        <h1>Nilai Mahasiswa Aplikasi Berbasis WEB</h1>
        <form  method="POST">
            <label> Masukkan Nilai Ujian Tengah Semester(UTS) : </label>
            <input name="uts" type="number" required><br/>
            <label> Masukkan Nilai Ujian Akhir Semester(UAS) : </label>
            <input name="uas" type="number" required><br/>
            <button type="submit" name="getFinalScore">Input</button>
        </form>
        <br/>

        <?php

            if(isset($_POST['getFinalScore'])){

                $uts = $_POST['uts'];
                $uas = $_POST['uas'];

                $final = (($uts*0.4)+($uas*0.6));

                if($final >= 80){
                    $index = 'A';
                }elseif($final >= 70){
                    $index = 'B';
                }elseif($final >= 50){
                    $index = 'C';
                }elseif($final >= 40){
                    $index = 'D';
                }elseif($final < 40){
                    $index = 'Gagal';
                }
    
                echo "Nilai UTS :  $uts  <br/>";
                echo "Nilai UAS :  $uas <br/>";
                echo "Nilai Akhir : $final <br/>";
                echo "Nilai Indeks :  $index <br/>";
    
            }
  

        ?>
    </body>
</html>