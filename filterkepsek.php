<?php

$host   = "localhost"; // nama server
$userdb = "root"; // user database
$passdb = ""; //password database
$namadb = "dapodik"; // nama database

// koneksi ke MySQL
$koneksi = mysql_connect($host, $userdb, $passdb);
if(!$koneksi) die("Gagal dalam Koneksi ke MySQL");
else {
	// memilih database
	mysql_select_db($namadb, $koneksi)
	
	//jika database tidak ditemukan
	or die("Database tidak ditemukan");
}


$sql=mysql_query("select * from profil where jenjang in ('smp') ");
$data=mysql_fetch_object($sql);
?>
<table >
  <thead>
  <tr>
    <th>jenjang</th>
    <th>Alamat</th>
    
  </tr>
  </thead>
  <tbody>
    <?php while($data=mysql_fetch_object($sql)): ?>
  <tr>
    <td><?php echo $data->jenjang;?></td>
    <td><?php echo $data->kec;?></td>
    
  </tr>
    <?php 

    endwhile;?>
  </tbody>
</table>
<?php  ?>