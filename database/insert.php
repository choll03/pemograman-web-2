<form method="post">
    <label>Nim</label>
    <input type="text" name="nim">
    <br>
    <label>Nama</label>
    <input type="text" name="nama">
    <br>
    <input type="submit" value="submit">
</form>

<?php
    include('koneksi.php');
    $nim = isset($_POST['nim']) ? $_POST['nim'] : false;
    $nama = isset($_POST['nama']) ? $_POST['nama'] : false;

    if($nim && $nama){
        mysqli_select_db($link, 'latihan');
        $query = 'INSERT INTO mahasiswa VALUES("'.$nim.'", "'.$nama.'")';
        mysqli_query($link, $query);
        mysqli_close($link);
    }  
?>