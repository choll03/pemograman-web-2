<?php
    $datas = [
        [
            'nama'          => 'Buku',
            'jumlah'        => 2,
            'harga'         => 17500,
        ],
        [
            'nama'          => 'Mouse',
            'jumlah'        => 5,
            'harga'         => 30000,
        ],
        [
            'nama'          => 'Pulpen',
            'jumlah'        => 10,
            'harga'         => 10500,
        ],
    ];
    $buku = "Buku";
    $jumlah_buku = 2;
    $harga_buku = 17500;
    $jumlah_harga_buku = $jumlah_buku * $harga_buku;

    $mouse = "Mouse";
    $jumlah_mouse = 5;
    $harga_mouse = 30000;
    $jumlah_harga_mouse = $jumlah_mouse * $harga_mouse;


    $total_belanja = $jumlah_harga_buku + $jumlah_harga_mouse;
    
    if($total_belanja >= 200000){
        $diskon = 5;
    }
    else if($total_belanja >= 500000){
        $diskon = 10;
    }
    else {
        $diskon = 0;
    }

    $harga_diskon = ($total_belanja * $diskon) /100;

    $total = $total_belanja - $harga_diskon;

    $uang_dibayar = 200000;

    if($total > $uang_dibayar){
        $keterangan = "kurang";
    }
    else if($total < $uang_dibayar) {
        $keterangan = "lebih";
    }
    else {
        $keterangan = "cukup";
    }

?>

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
    <?php foreach($datas as $data){ ?>
        <td>
            <tr><?php echo $data['nama']?></tr>
            <tr><?php echo $data['jumlah']?></tr>
            <tr><?php echo $data['harga']?></tr>
            <tr><?php echo $data['harga']?></tr>
        </td>
    <?php } ?>
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
        <td>cukup/kurang/lebih</td>
        <td><?php echo $keterangan ?></td>
    </tr>
</table>