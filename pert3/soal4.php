<?php include('header.php') ?>


<h2>Soal 4</h2>
<form method="post">
    <label>batas awal</label>
    <input type="text" name="awal">
    <br>
    <label>batas akhir</label>
    <input type="text" name="akhir">
    <br>
    <label>kelipatan</label>
    <input type="text" name="kelipatan">
    <br>
    <input type="submit" value="looping">
</form>
<br>

<?php

    if(isset($_POST['awal'])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $kelipatan = $_POST['kelipatan'];

        $deret = '';

        for($i = $awal; $i <= $akhir; $i++){
            if($i == $kelipatan){
                echo $i . ' ';
            }
        }
    }

?>