<form method="post">
    <table>
        <tr>
            <td></td>
            <td>Panjang</td>
            <td>lebar</td>
        </tr>
            <?php for($i=0; $i < 3; $i++){ ?>
                <tr>
                    <td><?php echo $i+1 ?></td>
                    <td><input type="text" name="panjang[]"></td>
                    <td><input type="text" name="lebar[]"></td>
                </tr>
            <?php } ?>

    </table>

    <input type="submit" value="hitung">
</form>
<br>

<table>
    <tr>
        <td style="border-bottom: 1px solid black">panjang</td>
        <td style="border-bottom: 1px solid black">lebar</td>
        <td style="border-bottom: 1px solid black">luas</td>
    </tr>

<?php
    if(isset($_POST['panjang'])){
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];

        foreach($panjang as $key => $value){
            echo '<tr>';
            echo '<td>' . $value .'</td>';
            echo '<td>' . $lebar[$key] .'</td>';
            echo '<td>' . $value * $lebar[$key] .'</td>';
            echo '<tr>';
        }
    }


?>

</table>