<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <base href="<?php echo base_url() ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="shortcut icon" href="favicon_16.ico"/>
    <link rel="bookmark" href="favicon_16.ico"/>
    <!-- site css -->
    <link rel="stylesheet" href="assets/dist/css/site.min.css">
    <style>
      body {
        background-color: #303641;
        color: #C1C3C6
      }
    </style>
  </head>
  <body>
    <div class="container" style="background-color: #ff3300; max-width: 350px; position: absolute; margin-top: 150px; margin-left: 35%;">
      <form class="form-signin" role="form" action="app/login" method="post">
        <h3 class="form-signin-heading">Sistem Pendukung Keputusan</h3>
        <p>Pimilihan siswa berprestasi menggunkan metode moora</p>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="glyphicon glyphicon-user"></i>
            </div>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" autofocus />
          </div>
        </div>

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class=" glyphicon glyphicon-lock "></i>
            </div>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
          </div>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br>
        <!-- <p>Belum punya akun, Silahkan Registrasi DI SINI</p>
        <a href="app/registrasi" class="btn btn-lg btn-info btn-block">Daftar</a> -->
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br>
  </body>
</html>
