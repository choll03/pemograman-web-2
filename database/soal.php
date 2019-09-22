
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
            <input type="checkbox" name="minuman[]" value="teh tawar"><label>Teh Tawar</label><br>
            <input type="checkbox" name="minuman[]" value="teh manis"><label>Teh Manis</label><br>
            <input type="checkbox" name="minuman[]" value="air miniral"><label>Air Mineral</label>
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
    include('koneksi.php');
    mysqli_select_db($link, 'latihan');

    if(isset($_POST['nasi'])){
        $nasi               = $_POST['nasi'];
        $jumlah_nasi        = $_POST['jumlah_nasi'];
        $lauk               = $_POST['lauk'];
        $jumlah_lauk        = $_POST['jumlah_lauk'];
        $minumans           = $_POST['minuman'];
        $jumlah_minuman     = $_POST['jumlah_minuman'];
        $minuman = '';

        foreach($minumans as $m){
            $minuman .= $m . ', ';
        }

        $query = 'INSERT INTO invoice VALUES("", "'.$nasi.'", "'.$jumlah_nasi.'", "'.$lauk.'", "'. $jumlah_lauk .'", "'. $minuman .'", "'. $jumlah_minuman .'")';
        mysqli_query($link, $query);
    }

    $query_select = 'SELECT * FROM invoice';
    $result = mysqli_query($link, $query_select);


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
    <?php while($row = mysqli_fetch_array($result)){ ?>
        <tr>
            <td><?php echo $row['nasi']; ?></td>
            <td><?php echo $row['jumlah_nasi']; ?></td>
            <td><?php echo $row['lauk']; ?></td>
            <td><?php echo $row['jumlah_lauk']; ?></td>
            <td><?php echo $row['minuman']; ?></td>
            <td><?php echo $row['jumlah_minuman']; ?></td>
        </tr>
    <?php } ?>
</table>
