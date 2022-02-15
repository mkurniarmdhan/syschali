<html>
<head>
    <title>Cetak PDF</title>
</head>
<body>
<h1 style="text-align: center;">LAPORAN DATA ANSENSI MURID BULAN JANUARI</h1>
<a href="<?php echo base_url("index.php/main/cetak"); ?>">Cetak Data</a><br><br>
<table border="1" width="100%">
<tr>
    <th>No</th>
  
    <th>Nama</th>
    <th>Jenis Kelamin</th>

    <th>Alamat</th>
    <th>TOtal Masuk</th>
</tr>
<?php
if( ! empty($siswa)){
    $no = 1;
    foreach($siswa as $data){
        echo "<tr>";
        echo "<td>".$no."</td>";
     
        echo "<td>".$data->nama."</td>";
        echo "<td>".$data->jenis_kelamin."</td>";
        echo "<td>".$data->alamat."</td>";
        echo "<td>".$data->total."</td>";
        echo "</tr>";
        $no++;
    }
}
?>
</table>
</body>
</html>