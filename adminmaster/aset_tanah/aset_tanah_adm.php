<?php
session_start();
if (isset($_SESSION['username'])) 
  {
    include "../../koneksi.php";
    $query = "SELECT * FROM aset_tanah";
    $sql = mysql_query($query, $koneksi);
    $jumlah_baris = mysql_num_rows($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Master - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="../../semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="../../homepage.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../../iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/table.css">
  <link href='../../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../../img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../../semantic-ui/semantic.js"></script>
  <script src="../../homepage.js"></script>
  <script>
    $(function(){
        $('.ui.card').popup();
    });
  </script>
  <style type="text/css">
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
    }

    div.scrollmenu a {
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
    }

    div.scrollmenu a:hover {
        background-color: #777;
    }
  </style>
  
  </head>
  <body id="home">
  <div class="ui inverted masthead centered segment">
    <div class="ui page grid">
      <div class="column">
        <div class="ui secondary pointing menu">
          <a class="logo item" onclick="window.location.href='../../index.php'">
            kusekolah
          </a>
         <div class="ui inline dropdown">
            <a class="item" style="color: white">Data Pokok</a>
            <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../kepsek/kepsekadm.php'">Kepsek</div>
              <div class="item" data-text="this week" onclick="window.location.href='../wakasek/wakasekadm.php'">Wakasek</div>
              <div class="item" data-text="this week" onclick="window.location.href='../data_guru/data_guru_adm.php'">Data Guru</div>
              <div class="item" data-text="this week" onclick="window.location.href='../siswa/siswaadm.php'">Data Siswa</div>
            </div>
          </div> 
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Data Sekolah</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../profil/profiladm.php'">Profil</div>
              <div class="item" data-text="this week" onclick="window.location.href='../prestasi/prestasi_adm.php'">Prestasi</div>
              <div class="item" data-text="this week" onclick="window.location.href='../jurusan/jurusan_adm.php'">Jurusan</div>
              <div class="item" data-text="this week" onclick="window.location.href='../tenkependik/tenkependik_adm.php'">Tenkependik</div>
            </div>
          </div>             
          <div class="ui inline dropdown">
              <a class="item" style="color: white">Aset</a>
              <div class="menu">
              <div class="item" data-text="this week" onclick="window.location.href='../aset_bangunan/aset_bangunan_adm.php'">Aset Bangunan</div>
              <div class="item" data-text="this week" onclick="window.location.href='../aset_tanah/aset_tanah_adm.php'">Aset Tanah</div>
              <div class="item" data-text="this week" onclick="window.location.href='../sarpras/sarprasadm.php'">Sarpras</div>
            </div>
          </div>
          <a class="item" href="../admpage.php">
            <i class="flaticon-star icon" style="color: white"></i>Data Admin
          </a>
          <div class="right menu">
            <div class="item">
              <div class="ui icon input">
                <input placeholder="Search..." type="text" class="search">
                <i class="flaticon-move link icon"></i>
              </div>
            </div>
            <a class="ui item" href="../../logout.php" style="color: white">
              Logout
            </a>
            </div>
          </div>
                     
          <div class="ui hidden transition information">
            <h1 class="ui inverted centered header">
                  Hello!
                  <h2><u><?php echo "".$_SESSION['username'];?></u></h2>
            </h1>
              <p class="ui centered lead">Mengelola Data Aset Tanah</p>
            <br>
          </div>
        </div>  
      </div>
    </div>
  </div>

  <!-- Isi Body -->
  <br>
  <div class="ui horizontal divider"><a>Aset Tanah</a></div>
  <div class="ui container">
  <div class="ui icon input">
    <input type="text" id="inputsearch" onkeyup="fungsisearch()" placeholder="Cari npsn.." title="Tulis npsn disini">
    <i class="flaticon-move link icon"></i>
  </div>
    <div class="ui mini horizontal menu">
      <a class="item" style="color: black" href="add_aset_tanah.php">
        Tambah Data      
      </a>
      <a class="item" style="color: black;font-family: Roboto">
        <?php echo "Jumlah Data : ".$jumlah_baris;?>
      </a>
      <a class="right menu item">        
        <p style="font-family: Roboto">(+) Data ditampilkan per 10 Data.</p>
      </a>
      
    </div>
  </div>
  <br>
  
	<?php
		$dbhost = 'localhost';
		$dbuser = 'root';
		$dbpass = '';
		$batas = 10;


		 
		$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
		if(! $koneksi )
		{
		  die('Gagal Koneksi: ' . mysql_error());
		}
		mysql_select_db('dapodik');
		/* Get total number of records */
		$sql = "SELECT count(npsn) FROM profil ";
		$ambildata = mysql_query( $sql, $koneksi );
		if(! $ambildata )
		{
		  die('Gagal Ambil Data: ' . mysql_error());
		}
		$row = mysql_fetch_array($ambildata, MYSQL_NUM );
		$hitung = $row[0];
		 
		if( isset($_GET{'page'} ) )
		{
		   $page = $_GET{'page'} + 1;
		   $offset = $batas * $page ;
		}
		else
		{
		   $page = 0;
		   $offset = 0;
		}
		$left_rec = $hitung - ($page * $batas);
		 
		$sql = "SELECT *".
		       "FROM aset_tanah ".
		       "LIMIT $offset, $batas";
		 
		$ambildata = mysql_query( $sql, $koneksi );
		if(! $ambildata )
		{
		  die('Gagal Ambil Data: ' . mysql_error());
		}
		
		    ?>
        <!--ScrollMenu!-->
		    <div class="ui container">
        <div class="scrollmenu">
  		    <table class="ui selectable celled table" id="tabel_aset_tanah" style="scroll-behavior: 2">
  		      <thead>
  		      <tr>
  		        <th><center>NPSN</center></th>
              <th><center>No Persil</center></th>
  		        <th><center>Kepemilikan</center></th>
  		        <th><center>Atas Nama Sertifikat</center></th>
  		        <th><center>Status Tanah</center></th>
  		        <th><center>Luas Tanah</center></th>
              <th><center>No Sertifikat</center></th>
              <th><center>Tanggal Sertifikat</center></th>
              <th><center>Tahun Perolehan</center></th>
              <th><center>Harga Perolehan</center></th>
              <th><center>Asal Usul</center></th>
              <th><center>Letak</center></th>
              <th><center>Peruntukan</center></th>
              <th><center>Edit</center></th>
              <th><center>Hapus</center></th>
  		      </tr>
  		      </thead>
  		      <tbody>
  		      <?php
  		      while($row = mysql_fetch_array($ambildata)): ?>
  				
  		      <tr>
  		        <td><?php echo "{$row['npsn']}"?></td>
              <td><?php echo "{$row['no_persil']}"?></td>
  		        <td><?php echo "{$row['kepemilikan']}"?></td>
  		        <td><?php echo "{$row['atasnama_sertifikat']}"?></td>
              <td><?php echo "{$row['status_tanah']}"?></td>
  		        <td><?php echo "{$row['luas_tanah']}"?></td>
              <td><?php echo "{$row['no_sertifikat']}"?></td>
              <td><?php echo "{$row['tgl_sertifikat']}"?></td>
               <td><?php echo "{$row['thn_perolehan']}"?></td>
  		        <td><?php echo "{$row['harga_perolehan']}"?></td>
              <td><?php echo "{$row['asal_usul']}"?></td>
              <td><?php echo "{$row['letak']}"?></td>
               <td><?php echo "{$row['peruntukan']}"?></td>
              <td>  
                <center><button class="ui icon button" onclick="window.location.href='edit_aset_tanah.php?npsn= <?php echo "{$row['npsn']}"?>'">
                  <i class="edit icon" ></i>
                </button></center>
              </td> 
              <td>  
                <center><button class="ui icon button" onclick="window.location.href='hapus_aset_tanah.php?npsn= <?php echo "{$row['npsn']}"?>'">
                  <i class="trash icon" ></i>
                </button></center>
              </td> 
  		      </tr>
  		      <?php 

          		endwhile;?>
  		      </tbody>
  		      </table>
          <!--ScrollMenu!-->
          </div>
          <!--ScrollMenu!-->
		    </div>
    	<center>
      <div class="ui container">
        <div class="ui mini horizontal menu">
        <a class="right menu item">
          <button class=" ui simple small blue button" onclick="window.location.href='aset_tanah_adm.php?page=$page'"><b>Next Data</b>
          </button>
        </a>
        <?php 
    		if( $page > 0 )
    		{
    		   $last = $page - 2;
           echo "<br>";
    		   echo "<a class=\"left menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='aset_tanah_adm.php?page=$last'\"><b>Previous Data<b></button></a>";

    		   echo "<a class=\"right menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='aset_tanah_adm.php?page=$page'\"><b>Next Data</b></button></a>";
    		}
    		else if( $page == 0 )
    		{
    		   echo "<a class=\"right menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='aset_tanah_adm.php?page=$page'\"><b>Next Data</b></button></a>";
    		}
    		else if( $left_rec < $batas )
    		{
    		   $last = $page - 2;
    		   echo "<a class=\"left menu item\"><button class=\" ui simple small blue button \" onclick=\"window.location.href='aset_tanah_adm.php?page=$last'\"><b>Previous Data</b></button></a>";
    		}
    		?>
      </div>
    </div>
    <br>
		</center>

    <script>
    function fungsisearch() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("inputsearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("tabel_aset_tanah");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }
    </script>
    
  <div class="ui inverted footer segment center">
    <div class="ui container">
      <center><img src="../../img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
<?php
  }else
    {
      ?>
      <script>alert('Anda Perlu Login Ke Akun Anda.');
      window.location.assign('../../login.html');
      </script>
      <?php
    }
?>