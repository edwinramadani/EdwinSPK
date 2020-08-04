<style>
  .float-right {
    float: right;
  }
</style>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <?php foreach ($detail as $d): ?>
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <div class="text-center">
              <img class="profile-user-img img-fluid img-circle" width="100" height="100"
                   src="assets/fotoprofile/<?php echo $d['foto']; ?>"
                   alt="User profile picture">
            </div>           
            
            <h3 class="profile-username text-center"><?php echo $d['nama']; ?></h3>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b style="margin-right: 50%;">NIS</b> <a class="float-right"><?php echo $d['nis']; ?></a>
              </li>
              <li class="list-group-item">
                <b style="margin-right: 50%;">Kelas</b> <a class="float-right"><?php echo $d['kelas']; ?></a>
              </li>
            </ul>

            <a href="<?php echo base_url('User/data_siswa'); ?>" class="btn btn-primary btn-block"><b>Kembali</b></a>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
      <div class="col-md-9">
        <div class="card">
          <div class="card-header p-2">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Profil lengkap</a></li>
            </ul>
          </div><!-- /.card-header -->
          <div class="card-body">
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post clearfix">
                  <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                      <b class="detail">Nama</b> <a class="float-right"><?php echo $d['nama']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Alamat</b> <a class="float-right"><?php echo $d['alamat']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Tempat Lahir</b> <a class="float-right"><?php echo $d['tempat_lahir']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Tanggal Lahir</b> <a class="float-right">Tanggal lahir</a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Jenis Kelamin</b>
                        <a class="float-right">
                          <?php if ($d['jenis_kelamin'] == 1): ?>
                            <?php echo 'Laki - Laki'; ?>
                          <?php else: ?>
                            <?php echo 'Perempuan'; ?>
                          <?php endif ?>
                        </a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Agama</b> 
                        <a class="float-right">
                          <?php if ($d['agama'] == 1): ?>
                            <p>Islam</p>
                          <?php elseif ($d['agama'] == 2): ?>
                            <p>Krinten</p>
                          <?php elseif ($d['agama'] == 3): ?>
                            <p>Katolik</p>
                          <?php elseif ($d['agama'] == 4): ?>
                            <p>Hindu</p>
                          <?php elseif ($d['agama'] == 5): ?>
                            <p>Budha</p>
                          <?php else: ?>
                            <p>Empty</p>
                          <?php endif ?>
                        </a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Tahun Masuk</b> <a class="float-right"><?php echo $d['tahun_masuk']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Email</b> <a class="float-right"><?php echo $d['email']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">No. Hp</b> <a class="float-right"><?php echo $d['telp']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Nama Ayah</b> <a class="float-right"><?php echo $d['ayah_wali']; ?></a>
                    </li>
                    <li class="list-group-item">
                      <b class="detail">Nama Ibu</b> <a class="float-right"><?php echo $d['ibu']; ?></a>
                    </li>
                  </ul>
                </div>
                
                <!-- /.post -->
              </div>
            </div>
            <!-- /.tab-content -->
          </div><!-- /.card-body -->
        </div>
        <!-- /.nav-tabs-custom -->
      </div>
      <!-- /.col -->
    </div>
    <?php endforeach ?>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->