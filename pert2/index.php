<?php
    $nama       = isset($_POST['nama']) ? $_POST['nama'] : "";
    $jumlah     = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;
    $harga      = isset($_POST['harga']) ? $_POST['harga'] : 0;
    $sub_total  = $jumlah * $harga;

    // $mouse = "Mouse";
    // $jumlah_mouse = 5;
    // $harga_mouse = 30000;
    // $jumlah_harga_mouse = $jumlah_mouse * $harga_mouse;


    // $total_belanja = $jumlah_harga_buku + $jumlah_harga_mouse;
    $total_belanja = $sub_total;
    
    if($total_belanja >= 500000){
        $diskon = 10;
    }
    else if($total_belanja >= 200000){
        $diskon = 5;
    }
    else {
        $diskon = 0;
    }

    $harga_diskon = ($total_belanja * $diskon) /100;

    $total = $total_belanja - $harga_diskon;

    $uang_dibayar = $_POST['uang_dibayar'];

    if($total > $uang_dibayar){
        $keterangan = "kurang";
        $harga_ket = $total - $uang_dibayar;
    }
    else if($total < $uang_dibayar) {
        $keterangan = "lebih";
        $harga_ket = $uang_dibayar - $total;
    }
    else {
        $keterangan = "cukup";
        $harga_ket = '';
    }

?>
<form method="post">
    <table width="20%">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $nama?>"></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="text" name="jumlah" value="<?php echo $jumlah?>"></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><input type="text" name="harga" value="<?php echo $harga?>"></td>
        </tr>
        <tr>
            <td>Uang yang di bayarkan</td>
            <td>:</td>
            <td><input type="text" name="uang_dibayar" value="<?php echo $uang_dibayar?>"></td>
        </tr>
        <tr>
            <td align="right" colspan="3">
                <br>
                <input type="submit" value="submit">
            </td>
        </tr>
    </table>
</form>
<br><br>
<table width="50%" border="1">
    <tr>
        <td colspan="4" align="center">Daftar Pemesanan</td>
    </tr>
    <tr>
        <td>Nama Peralatan</td>
        <td>Jumlah</td>
        <td>Harga Satuan</td>
        <td>Jumlah Harga</td>
    </tr>
    <tr>
        <td><?php echo $nama ?></td>
        <td align="right"><?php echo $jumlah ?></td>
        <td align="right"><?php echo $harga ?></td>
        <td align="right"><?php echo $sub_total ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right">Total Harga</td>
        <td align="right"><?php echo $total_belanja ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right">diskon <?php echo $diskon ?>%</td>
        <td align="right"><?php echo $harga_diskon ?></td>
    </tr>
    <tr>
        <td colspan="3" align="right">jumlah dibayar</td>
        <td align="right"><?php echo $total ?></td>
    </tr>
</table>
<br>
<table width="50%">
    <tr>
        <td>uang dibayar</td>
        <td><?php echo $uang_dibayar ?></td>
    </tr> 
    <tr>
        <td>keterangan</td>
        <td>cukup/kurang/lebih</td>
    </tr>
    <tr>
        <td><?php echo $keterangan ?></td>
        <td><?php echo $harga_ket ?></td>
    </tr>
</table>