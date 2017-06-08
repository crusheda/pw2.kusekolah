<?php
include "../../koneksi.php";
$kunci=$_GET['npsn'];
$query="SELECT * from kepsek where npsn=".$kunci;
$sql = mysql_query($query, $koneksi);
$data = mysql_fetch_object($sql);

    
  ?>
  <!DOCTYPE html>
<html>
<head>
  <title>Edit Kepsek</title>
  <link rel="stylesheet" type="text/css" href="../../dist/semantic.min.css">
  <link href='../../img/twh.ico' rel='shortcut icon'>
  <link rel="icon" href="../../img/twh.ico" type="image/x-icon">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="../../dist/semantic.min.js"></script>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <link rel="stylesheet" type="text/css" href="../../dist/components/reset.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/site.css">

  <link rel="stylesheet" type="text/css" href="../../dist/components/container.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/grid.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/header.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/image.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/menu.css">

  <link rel="stylesheet" type="text/css" href="../../dist/components/divider.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/segment.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/form.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/input.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/button.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/list.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/message.css">
  <link rel="stylesheet" type="text/css" href="../../dist/components/icon.css">

  <script src="../../dist/components/form.js"></script>
  <script src="../../dist/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #0064AB;
      background-size: 100% auto;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.dropdown').dropdown();
      $('.ui.form')
        .form({
          fields: {
            nama: {
              identifier  : 'npsn',
              rules: [
                {
                  type   : 'empty'
                },
                {
                  type   : 'number'
                }
              ]
            },
            alamat: {
              identifier  : 'tahun_ajaran',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            agama: {
              identifier  : 'kepala_sekolah',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            umur: {
              identifier  : 'nbm',
              rules: [
                {
                  type   : 'empty'
                },
                {
                  type    : 'number'
                }
              ]
            },
            status: {
              identifier  : 'tgl_lahir',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            username: {
              identifier  : 'sk_pengangkatan',
              rules: [
                {
                  type   : 'empty'
                },
                {
                  type   : 'number'
                }
              ]
            },
            password: {
              identifier  : 'tgl_sk',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            email: {
              identifier  : 'asal_sk',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            hakakses: {
              identifier  : 'tmt_jabatan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            hakakses: {
              identifier  : 'masa_tugaske',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            hakakses: {
              identifier  : 'tgl_berahir',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            }       
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>
<button class="circular floated fixed ui icon button" 
        style="margin-top: 20px;margin-left: 20px;width: 45px;height: 45px;opacity: 0.8;background-color: white;color: blue"
        onclick="window.location.href='kepsekadm.php'">
  <i class="left arrow icon" style="font-size: 22px"></i>
</button>
<div class="container">
</div>
<div class="ui aligned center aligned grid" style="margin-top: -100px">
  <div class="column">
    <h2 class="ui teal image header">
    <br><br>
    <br><br>
      <img src="../../img/dapodik.png" class="image">
      <div class="content" style="color: white;opacity: 0.8">
        Edit Data Kepala Sekolah
      </div>
    </h2>
    <form class="ui large form" action="proseseditkepsek.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="npsn" maxlength="8" placeholder="NPSN (ex:20xxxxxxx)" value="<?php echo $data->npsn;?>">

          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="tahun_ajaran" placeholder="Tahun Ajaran (ex:YYYY/YYYY)" value="<?php echo $data->tahun_ajaran;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="kepala_sekolah" placeholder="Nama Kepala Sekolah" value="<?php echo $data->kepala_sekolah;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="hashtag icon"></i>
            <input type="text" name="nbm" placeholder="NBM" value="<?php echo $data->nbm;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="home icon"></i>
            <input type="text" name="tgl_lahir" placeholder="Tanggal Lahir (ex:YYYY-MM-DD)" value="<?php echo $data->tgl_lahir;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="users icon"></i>
            <input type="text" name="sk_pengangkatan" placeholder="SK-Pengangkatan (ex:2xx)" value="<?php echo $data->sk_pengangkatan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="text" name="tgl_sk" placeholder="Tanggal SK (ex:YYYY-MM-DD)" value="<?php echo $data->tgl_sk;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="student icon"></i>
            <input type="text" name="asal_sk" placeholder="Asal SK" value="<?php echo $data->asal_sk;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="student icon"></i>
            <input type="text" name="tmt_jabatan" placeholder="Tmt Jabatan (ex:YYYY-MM-DD)" value="<?php echo $data->tmt_jabatan;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="student icon"></i>
            <input type="text" name="masa_tugaske" placeholder="Masa Tugas Ke- (ex:II)" value="<?php echo $data->masa_tugaske;?>">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="student icon"></i>
            <input type="text" name="tgl_berahir" placeholder="Tanggal Berakhir (ex:YYYY-MM-DD)" value="<?php echo $data->tgl_berahir;?>">
          </div>
        </div>
        <div class="ui fluid large blue submit button" style="background-color: #697192">
          <a style="color: white">Edit</a>
        </div>
          <br>
      </div>
    </form>
    <br>
  </div>
</div>
</body>
</html>