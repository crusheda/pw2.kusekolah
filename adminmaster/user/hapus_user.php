<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query=mysql_query("delete from user where id=".$kunci);
echo "<script>
		alert('Berhasil delete data');
		window.location.assign('user_adm.php');

	</script>";
?>