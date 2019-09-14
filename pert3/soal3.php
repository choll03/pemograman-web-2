<?php include('header.php') ?>


<h2>Soal 3</h2>
<form method="post">
    <label>batas awal</label>
    <input type="text" name="awal">
    <br>
    <label>batas akhir</label>
    <input type="text" name="akhir">
    <br>
    <input type="submit" value="looping">
</form>
<br>

<?php

    if(isset($_POST['awal'])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
    
        for($i = $awal; $i <= $akhir; $i++){
            if(($i % 2) == 1){
                echo $i . " ";
            }
        }
    }

?>