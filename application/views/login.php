<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Halaman Login</title>
    <base href="<?php echo base_url() ?>">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <style>
      /*
      *
      * ==========================================
      * CUSTOM UTIL CLASSES
      * ==========================================
      *
      */
      .login,
      .image {
        min-height: 100vh;
      }

      .bg-image {
        background-image: url('https://img.okezone.com/content/2017/04/09/340/1662802/60-376-siswa-sma-sumut-siap-laksanakan-ujian-nasional-LjTeMR9TQI.jpg');
        background-size: cover;
        background-position: center center;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row no-gutter">
          <!-- The image half -->
          <div class="col-md-6 d-none d-md-flex bg-image"></div>


          <!-- The content half -->
          <div class="col-md-6 bg-light">
              <div class="login d-flex align-items-center py-5">

                  <!-- Demo content-->
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-10 col-xl-7 mx-auto">
                              <h3 class="display-4">SPK Sipres</h3>
                              <p class="text-muted mb-4">Pimilihan siswa berprestasi menggunkan metode moora.</p>
                              <form class="form-signin" role="form" action="app/login" method="post">
                                  <div class="form-group mb-3">
                                      <input id="username" name="username" type="text" placeholder="Username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                  </div>
                                  <div class="form-group mb-3">
                                      <input id="password" name="password" type="password" placeholder="Password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                  </div>
                                  <!-- <div class="custom-control custom-checkbox mb-3">
                                      <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                      <label for="customCheck1" class="custom-control-label">Remember password</label>
                                  </div> -->
                                  <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Sign in</button>
                                  <div class="text-center d-flex justify-content-between mt-4"><p> Copyright 2020 by <a href="https://instagram.com/edwinramadanii?igshid=1f6hm4gfi2jc" target="blank">Edwin Ramadani</a></p></div>
                              </form>
                          </div>
                      </div>
                  </div><!-- End -->

              </div>
          </div><!-- End -->

      </div>
  </div>


    <!-- <div class="container" style="background-color: #ff3300; max-width: 350px; position: absolute; margin-top: 150px; margin-left: 35%;">
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
      
      </form>

    </div>
    <div class="clearfix"></div>
    <br><br> -->
  </body>
</html>
