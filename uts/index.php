<?php
    $nama = '';
    $no_service='';
    $no = "";
    $services = [];
    $nama_item="";
    $keterangan="";
    $harga="";
    $total="";
    $ppn="";
    $temp = '';
    $bayar="";

    if(isset($_POST['no_service'])){
        $no_service = $_POST['no_service'];
        $no = 1;
        
        if(isset($_POST['nama'])){
            $nama = $_POST['nama'];
            $services = $_POST['service'];
            foreach($services as $service){
                $temp .= $service . ', ';
            }
        }
        
    }

    if(isset($_POST['nama_barang'])){
        
        $no = 1;
        $nama_item = $_POST['nama_barang'];
        $jml_item = $_POST['qty'];
        if($_POST['keterangan'] == 1){
            $keterangan = "Ganti";
            if($nama_item == "mainboard"){
                $harga = 2000000;
            }
            else if($nama_item == "monitor"){
                $harga = 0;
            }
            else if($nama_item == "printer"){
                $harga = 0;
            }
            else if($nama_item == "ram"){
                $harga = 400000;
            }
            else if($nama_item == "hdd"){
                $harga = 700000;
            }
            else if($nama_item == "power_supply"){
                $harga = 200000;
            }
            else if($nama_item == "fan_processor"){
                $harga = 800000;
            }
            else if($nama_item == "install_os"){
                $harga = 0;
            }
        
        }
        else if($_POST['keterangan'] == 2){
            $keterangan = "Diperbaiki";
            if($nama_item == "mainboard"){
                $harga = 800000;
            }
            else if($nama_item == "monitor"){
                $harga = 650000;
            }
            else if($nama_item == "printer"){
                $harga = 40000;
            }
            else if($nama_item == "ram"){
                $harga = 0;
            }
            else if($nama_item == "hdd"){
                $harga = 20000;
            }
            else if($nama_item == "power_supply"){
                $harga = 0;
            }
            else if($nama_item == "fan_processor"){
                $harga = 0;
            }
            else if($nama_item == "install_os"){
                $harga = 80000;
            }
        }
        else{
            $keterangan = "Dibersihkan";
            if($nama_item == "mainboard"){
                $harga = 200000;
            }
            else if($nama_item == "monitor"){
                $harga = 100000;
            }
            else if($nama_item == "printer"){
                $harga = 100000;
            }
            else if($nama_item == "ram"){
                $harga = 50000;
            }
            else if($nama_item == "hdd"){
                $harga = 0;
            }
            else if($nama_item == "power_supply"){
                $harga = 0;
            }
            else if($nama_item == "fan_processor"){
                $harga = 0;
            }
            else if($nama_item == "install_os"){
                $harga = 0;
            }
        }

        $total = $harga + 100000;
        $ppn = ($total * 10) / 100;
        $bayar = $total - $ppn;

    }
?>
<h3>DATA SERVICE</h3>
<h4>"ELECT  SERV"</h4>
<h4>ISMAIL</h4>

<br>
<form method="post">
<label>Nama</label>
<input type="text" name="nama">
<br>
<label>No. Service</label>
<input type="text" name="no_service">
<br><br>
<label>cek service</label>
<br>
<br>
<table>
    <tr>
        <td>
            <input type="checkbox" name="service[]" value="mainboard">
            <label>Mainboard</label>
        </td>
        <td>
            <input type="checkbox" name="service[]" value="ram">
            <label>RAM</label>
        </td>
        <td>
            <input type="checkbox" name="service[]" value="power_supply">
            <label>Power Supply</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="service[]" value="monitor">
            <label>Monitor</label>
        </td>
        <td>
            <input type="checkbox" name="service[]" value="hdd">
            <label>HDD</label>
        </td>
        <td>
            <input type="checkbox" name="service[]" value="install_os">
            <label>Install OS</label>
        </td>
    </tr>
    <tr>
        <td>
            <input type="checkbox" name="service[]" value="printer">
            <label>Printer</label>
        </td>
        <td>
            <input type="checkbox" name="service[]" value="fan">
            <label>Fan Processor</label>
        </td>
    </tr>
</table>

<input type="submit" value="Buat">
</form>
<br>
<h4>Data Kerusakan</h4>
<table border="1" width="30%">
    <tr>
        <th>No.</th>
        <th>Nama Pelanggan</th>
        <th>No Servie</th>
        <th>Kerusakan</th>
    </tr>
    
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $nama ?></td>
        <td><?php echo $no_service ?></td>
        <td><?php echo $temp ?></td>
    </tr>
</table>
<form method="post">
<h4>Perbaikan :</h4>
<table>
    <tr>
        <td>Jml item</td>
        <td><input type="text" name="qty"></td>
    </tr>
    <tr>
        <td>Nama Item</td>
        <td>
            <select name="nama_barang">
                <?php foreach($services as $service){ ?>
                    <option value="<?php echo $service ?>"><?php echo $service ?></option>
                <?php } ?>
            </select>
        </td>
    </tr>
    <tr></tr>
    <tr>
        <td>Keterangan</td>
        <td>
            <input type="radio" name="keterangan_<?php echo $service ?>" value="1"><label> Ganti</label><br>
            <input type="radio" name="keterangan_<?php echo $service ?>" value="2"><label> Diperbaiki</label><br>
            <input type="radio" name="keterangan_<?php echo $service ?>" value="3"><label> Dibersihkan</label>
        </td>
    </tr>
</table>
<input type="submit" value="Buat">

</form>
<h4>Detail Perbaikan</h4>

<p>Nama Pelanggan : <?php echo $nama ?> &nbsp;&nbsp;&nbsp; Kode: <?php echo $no_service ?></p>

<table border="1" width="30%">
    <tr>
        <th>No.</th>
        <th>Nama Item</th>
        <th>Keterangan</th>
        <th>Harga</th>
    </tr>
    <tr>
        <td><?php echo $no ?></td>
        <td><?php echo $nama_item ?></td>
        <td><?php echo $keterangan ?></td>
        <td><?php echo $harga ?></td>
    </tr>
</table>
<table width="30%">
    <tr>
        <td>Total</td>
        <td align="right"><?php echo $total ?></td>
    </tr>
    <tr>
        <td>PPN (10%)</td>
        <td align="right"><?php echo $ppn ?></td>
    </tr>
    <tr>
        <td>Bayar</td>
        <td align="right"><?php echo $bayar ?></td>
    </tr>
</table>