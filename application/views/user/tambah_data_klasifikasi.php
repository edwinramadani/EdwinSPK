
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <?php foreach ($onesiswa as $os) { ?>
            <div class="text-center">
              <img height="150" width="150" class="profile-user-img img-fluid img-circle"
                   src="assets/fotoprofile/<?php echo $os['foto'] ?>"
                   alt="User profile picture">
            </div>
            
            <h3 class="profile-username text-center"><?php echo $os['nama']; ?></h3>

            <ul class="list-group list-group-unbordered mb-3">
              <li class="list-group-item">
                <b style="margin-right: 50%;">NIS</b> <?php echo $os['nis']; ?>
              </li>
              <li class="list-group-item">
                <b style="margin-right: 50%;">Kelas</b> <a class="float-right"><?php echo $os['kelas']; ?></a>
              </li>
            </ul>
            <?php } ?>

            <a href="<?php echo base_url('User/data_klasifikasi'); ?>" class="btn btn-warning btn-block"><b>Kembali</b></a>
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
                  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Kesenian</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Ranking</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Agama</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Matematika</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Bahasa Indonesia</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Bahasa Inggris</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Ilmu pengetahuan alam</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">Ilmu pengetahuan sosial</label></div>
                        <div class="col-sm-6">
                          <select class="form-control" name="nilaiips" id="nilaiips">
                            <option value="">75 - 80</option>
                          </select>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
                  </form>
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
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->