<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Wakil Kepala Sekolah</title>
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
            npsn: {
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
            tahun_ajaran: {
              identifier  : 'tahun_ajaran',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            nbm: {
              identifier  : 'nbm',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            wakil_kepala: {
              identifier  : 'wakil_kepala',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            waka_bidang: {
              identifier  : 'waka_bidang',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            sk_pengangkatan: {
              identifier  : 'sk_pengangkatan',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tgl_sk: {
              identifier  : 'tgl_sk',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            asal_sk: {
              identifier  : 'asal_sk',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tmt_jabatan: {
              identifier  : 'tmt_jabatan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            masa_tugaske: {
              identifier  : 'masa_tugaske',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tgl_habis: {
              identifier  : 'tgl_habis',
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
        onclick="window.location.href='wakasekadm.php'">
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
        Tambahkan Data Wakil Kepala Sekolah
      </div>
    </h2>
    <form class="ui large form" action="prosesaddwakasek.php" method="post" >
      <div class="ui stacked segment" style="opacity: 0.8">
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="npsn" maxlength="8" placeholder="NPSN (ex:20xxxxxxx)">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tahun_ajaran" placeholder="Tahun Ajaran">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nbm" placeholder="NBM">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="wakil_kepala" placeholder="Wakil Kepala">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="waka_bidang" placeholder="Waka Bidang">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="sk_pengangkatan" placeholder="SK Pengangkatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_sk" placeholder="Tanggal SK">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="asal_sk" placeholder="Asal SK">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tmt_jabatan" placeholder="Tamat Jabatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="masa_tugaske" placeholder="Masa Tugas ke">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_habis" placeholder="Tanggal Habis">
          </div>
        </div>
        <div class="ui fluid large blue submit button" style="background-color: #697192">
          <a style="color: white">Tambah</a>
        </div>
          <br>
      </div>
    </form>
    <br>
  </div>
</div>
</body>
</html>