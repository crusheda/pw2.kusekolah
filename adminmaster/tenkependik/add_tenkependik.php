<!DOCTYPE html>
<html>
<head>
  <title>Tambah Tenkependik</title>
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
            jabatan: {
              identifier  : 'jabatan',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            nama: {
              identifier  : 'nama',
              rules: [                
                {
                  type   : 'empty'
                }
              ]
            },
            nip: {
              identifier  : 'nip',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tempat_lhr: {
              identifier  : 'tempat_lhr',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            tgl_lhr: {
              identifier  : 'tgl_lhr',
              rules: [
                {
                  type   : 'empty'
                }
              ]
            },
            telepon: {
              identifier  : 'telepon',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            pangkat: {
              identifier  : 'pangkat',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            tgl_pengangkatan: {
              identifier  : 'tgl_pengangkatan',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            jk: {
              identifier  : 'jk',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },       
            status_pegawai: {
              identifier  : 'status_pegawai',
              rules :[
                {
                  type    : 'status_pegawai'
                }
              ]
            },
            organisasi: {
              identifier  : 'organisasi',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            alamat: {
              identifier  : 'alamat',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            rt_rw: {
              identifier  : 'rt_rw',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            kel: {
              identifier  : 'kel',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            kec: {
              identifier  : 'kec',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            kab: {
              identifier  : 'kab',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            prov: {
              identifier  : 'prov',
              rules :[
                {
                  type    : 'empty'
                }
              ]
            },
            pnd_thr: {
              identifier  : 'pnd_thr',
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
        onclick="window.location.href='tenkependik_adm.php'">
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
        Tambahkan Data
      </div>
    </h2>
    <form class="ui large form" action="prosesadd_tenkependik.php" method="post" >
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
            <input type="text" name="jabatan" placeholder="Jabatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nama" placeholder="Nama">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="nip" placeholder="NIP">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tempat_lhr" placeholder="Tempat Lahir" >
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_lhr" placeholder="Tanggal Lahir">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="telepon" placeholder="Telepon">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="email" placeholder="Email">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="pangkat" placeholder="Pangkat">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="tgl_pengangkatan" placeholder="Tanggal Pengangkatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="jk" placeholder="Jenis Kelamin">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="status_pegawai" placeholder="Status Pegawai">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="organisasi" placeholder="Organisasi">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="alamat" placeholder="Alamat">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="rt_rw" placeholder="rt_rw">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kel" placeholder="Kelurahan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kec" placeholder="Kecamatan">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="kab" placeholder="Kabupaten">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="prov" placeholder="Provinsi">
          </div>
          <div class="field">
          <div class="ui left icon input">
            <i class="chevron right icon"></i>
            <input type="text" name="pnd_thr" placeholder="Pendidikan terakhir">
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