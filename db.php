<?php 

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$wilayah = $_POST['wilayah'];
$jp = $_POST['jumlahpositif'];
$jd = $_POST['jumlahdirawat'];
$js = $_POST['jumlahsembuh'];
$jm = $_POST['jumlahmeninggal'];


?>

<h3 align="center">Data Pemantauan Covid-19 Wilayah <?php echo "" . $wilayah; ?><br>
<?php echo date('l, d-m-Y  h:i:s a'); ?><br>
Nama Operator <?php echo "" . $nama; ?>  nim <?php echo "" . $nim; ?>
</h3>

<body>
    <table width="500" border="1" align="center">
<tr>
    <td>Jumlah Positif</td>
    <td>Jumlah Dirawat</td>
    <td>Jumlah Sembuh</td>
    <td>Jumlah Meningggal</td>
</tr>
<tr>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $jp; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $jd; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $js; ?>"/></</td>
    <td><input type="text" name="nama" width="80" value="<?php echo "" . $jm; ?>"/></</td>
</tr>
</body>
