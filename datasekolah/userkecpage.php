<?php
    include "../koneksi.php";
    $kunci=$_GET['id'];
    $query = "SELECT * FROM kecamatan where kode_kab='$kunci'";
    $sql = mysql_query($query, $koneksi);
    $jumlah_baris = mysql_num_rows($sql);
?><!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properities -->
  <title>Data Sekolah - kusekolah</title>

  <link rel="stylesheet" type="text/css" href="../semantic-ui/semantic.css">
  <link rel="stylesheet" type="text/css" href="../homepage.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../iconfonts/flaticon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/icon.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../dist/components/table.css">
  <link href='../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../img/twh.ico" type="image/x-icon">

  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.js"></script>
  <script src="../semantic-ui/semantic.js"></script>
  <script src="../homepage.js"></script>
  <script>
    $(function(){
        $('.ui.card').popup();
    });
  </script>
  <style type="text/css">
    div.scrollmenu {
        background-color: #333;
        overflow: auto;
        max-height: 500px;
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
          <a class="logo item" onclick="window.location.href='../index.php'">
            kusekolah  </a>                
          <a class="item" onclick="window.location.href='userpage.php'">
            <i class="university icon" style="color: white"></i> Data Sekolah
          </a>
          <a class="item" onclick="window.location.href='../dataguru/userpage.php'">
            <i class="user icon" style="color: white"></i> Data Guru
          </a>
          <a class="item" onclick="window.location.href='../datasiswa/userpage.php'">
            <i class="student icon" style="color: white"></i> Data Siswa
          </a>
          <a class="item">
            <i class="flaticon-mail" style="color: white"></i> Hubungi Kami
          </a>
          <div class="right menu">
            <a class="ui item" href="../login.html" style="color: white" title="Login Ke Akun Anda">
              <i class="pointing right icon" style="color: white"></i><b>Login</b>
            </a>
          </div>
        </div>
                     
        <div class="ui hidden transition information">
          <h1 class="ui inverted centered header">
                Hello!
          </h1>
            <p class="ui centered lead">Lihat Informasi Data Sekolah</p>
          <br>
        </div>
      </div>  
    </div>
  </div>
  <br>
  <!-- Isi Body -->
  <div class="ui horizontal divider"><a>KECAMATAN</a></div>
  <div class="ui container">
  <div class="ui icon input">
    <input type="text" id="inputsearch" onkeyup="fungsisearch()" placeholder="Cari Kecamatan.." title="Tulis Kode Kecamatan disini">
    <i class="flaticon-move link icon"></i>
  </div>
    <div class="ui mini horizontal menu">
      <a class="item" style="color: black;font-family: Roboto">
        <?php echo "Jumlah Data : ".$jumlah_baris;?>
      </a>
      
    </div>
  </div>
  <br>

  <!--ScrollMenu!-->
  <div class="ui container">
    <div class="scrollmenu">
      <table class="ui selectable celled table" id="tabelkec">
        <thead>
        <tr>
          <th>Kode Kecamatan</th>
          <th>Kode Kabupaten</th>
          <th>Nama Kecamatan</th>
        </tr>
        </thead>
        <tbody>
          <?php while($data = mysql_fetch_object($sql)): ?>
        <tr>
          <td><a class="ui button" style="color: black" onclick="window.location.href='usersekolahpage.php?kode_kec=<?php echo $data->kode_kec;?>'"><?php echo $data->kode_kec;?></a></td>
          <td><?php echo $data->kode_kab;?></td>          
          <td><?php echo $data->nama_kec;?></td>
        </tr>
          <?php 

          endwhile;?>
        </tbody>        
      </table>
    </div>
  </div>

  <script>
    function fungsisearch() {
      var input, filter, table, tr, td, i;
      input = document.getElementById("inputsearch");
      filter = input.value.toUpperCase();
      table = document.getElementById("tabelkec");
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
      <center><img src="../img/twh.png" style="width: 40px;height: 40px"></center>
    </div>
      <center>
        <h4 class="ui inverted header">All Right Reserved<br><sub>Copyright 2017</sub></h4>
      </center>
  </div>
</body>
</html>
