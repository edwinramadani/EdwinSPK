<?php if ($this->session->userdata('level')=="admin"): ?>
  <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
    <ul class="list-group panel">
      <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU UTAMA</b></li>
      <li>
        <a href="User" class="list-group-item" data-toggle="buttom"><i class="glyphicon glyphicon-home"></i>Dasboard</a>
      </li>
      <li>
        <a href="#home" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Master  <span class="glyphicon glyphicon-chevron-right"></span></a>
        <li class="collapse" id="home">
          <a href="<?php echo site_url('User/data_siswa'); ?>" id="siswa" class="list-group-item" data-toggle="buttom"></i>Data Siswa</a> 
          <a href="<?php echo site_url('User/data_kelas'); ?>" id="kelas" class="list-group-item" data-toggle="buttom"></i>Data Kelas</a> 
          <a href="<?php echo site_url('User/pembobotan_kriteria'); ?>" id="pembobotan" class="list-group-item" data-toggle="buttom"></i>Pembobotan Kriteria</a>
          <a href="<?php echo site_url('User/data_kriteria'); ?>" id="kriteria" class="list-group-item" data-toggle="buttom"></i>Data Kriteria</a>
          <a href="<?php echo site_url('User/data_klasifikasi'); ?>" id="klasifikasi" class="list-group-item" data-toggle="buttom"></i>Data Nilai</a>
        </li>
      </li>
      <li>
        <a href="<?php echo site_url('User/hasil_analisa'); ?>" class="list-group-item" data-toggle="buttom"><i class="fa fa-table"></i>Hasil Analisa</a>
      </li>
      <li>
        <a href="<?php echo base_url('User/data_administrator'); ?>" class="list-group-item" data-toggle="buttom"><i class="fa fa-cog"></i>Manajemen Pengguna</a>
      </li>

      <li class="list-group-item"><a href="app/logout"><i class="glyphicon glyphicon-share"></i>Logout</a></li>
    </ul>
  </div>
<?php endif ?>