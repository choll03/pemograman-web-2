
<form method="post">
<table width="50%">
    <tr>
        <th>Nasi</th>
        <th>jumlah</th>
        <th>Lauk</th>
        <th>jumlah</th>
        <th>Minum</th>
        <th>jumlah</th>
    </tr>
    <tr>
        <td>
            <select name="nasi">
                <option value="putih">putih</option>
                <option value="uduk">uduk</option>
                <option value="merah">merah</option>
            </select>
        </td>
        <td>
            <input type="text" name="jumlah_nasi">
        </td>
        <td>
            <input type="radio" name="lauk" value="daging"><label>Daging</label><br>
            <input type="radio" name="lauk" value="ayam"><label>Ayam</label><br>
            <input type="radio" name="lauk" value="tahu_tempe"><label>Tahu Tempe</label>
        </td>
        <td>
            <input type="text" name="jumlah_lauk">
        </td>
        <td>
            <input type="checkbox" name="minuman[]" value="teh_tawar"><label>Teh Tawar</label><br>
            <input type="checkbox" name="minuman[]" value="teh_manis"><label>Teh Manis</label><br>
            <input type="checkbox" name="minuman[]" value="air_miniral"><label>Air Mineral</label>
        </td>
        <td>
            <input type="text" name="jumlah_minuman">
        </td>
    </tr>
    <td>
        <td colspan="6">
            <input type="submit" value="pesan">
        </td>
    </td>
</table>

</form>
<br>
<br>
<?php

    if(isset($_POST['nasi'])){
        $nasi       = $_POST['nasi'];
        $jml_nasi   = $_POST['jumlah_nasi'];
        $lauk       = $_POST['lauk'];
        $jml_lauk   = $_POST['jumlah_lauk'];
        $minumans    = $_POST['minuman'];
        $jml_minuman    = $_POST['jumlah_minuman'];

?>


<table border="1" width="50%">
    <tr>
        <td>Nasi</td>
        <td>jumlah</td>
        <td>Lauk</td>
        <td>jumlah</td>
        <td>Minum</td>
        <td>jumlah</td>
        <td>Sub Total</td>
    </tr>
    <tr>
        <td><?php echo $nasi ?></td>
        <td><?php echo $jml_nasi ?></td>
        <td><?php echo $lauk ?></td>
        <td><?php echo $jml_lauk ?></td>
        <td>
            <ul>
            <?php 
                foreach($minumans as $minuman){
                    echo "<li>" . $minuman . "</li>";
                }
            ?>
            </ul>
        </td>
        <td><?php echo $jml_minuman ?></td>
    </tr>
    
</table>

<?php } ?>
