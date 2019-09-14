<?php include('header.php') ?>


<h2>Soal 2</h2>
<form method="post">
    <label>batas awal</label>
    <input type="text" name="awal">
    <br>
    <label>batas akhir</label>
    <input type="text" name="akhir">
    <br>
    <label>perkalian</label>
    <input type="text" name="perkalian">
    <br>
    <input type="submit" value="looping">
</form>
<br>

<?php

    if(isset($_POST['awal'])){
        $awal = $_POST['awal'];
        $akhir = $_POST['akhir'];
        $perkalian = $_POST['perkalian'];

        $total = 0;
    
        for($i = $awal; $i <= $akhir; $i++){
            echo $i . " * " . $perkalian . ' = ' . $i * $perkalian . '<br>';
            $total += ($i * $perkalian);
        }

        echo $total;
    }

?>