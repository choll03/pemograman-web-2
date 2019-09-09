
<form method="post">
    <table>
        <tr>
            <td>Panjang</td>
            <td> : </td>
            <td><input type="text" name="panjang"></td>
        </tr>
        <tr>
            <td>Lebar</td>
            <td> : </td>
            <td><input type="text" name="lebar"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" value="submit"></td>
        </tr>
    </table>    
</form>

<br>
<br>

<?php

    $panjang    = $_POST['panjang'];
    $lebar      = $_POST['lebar'];

    $luas = $panjang * $lebar;


?>

<table cellpadding="2" width="20%">
    <tr>
        <td>Panjang</td>
        <td>lebar</td>
        <td>Luas</td>
    </tr>
    <tr>
        <td><?php echo $panjang ?></td>
        <td><?php echo $lebar ?></td>
        <td><?php echo $luas ?></td>
    </tr>
</table>