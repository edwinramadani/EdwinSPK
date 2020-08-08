<script>
    <?php foreach ($bbkriteria as $bk): ?>
    $(document).ready(function(){

          var id = "<?php echo $bk['id_kriteria'] ?>";
          
          $.ajax({
              url : "<?php echo base_url('User/getlist'); ?>",
              method : "POST",
              data : {id: id},
              dataType : 'json',
              success: function(krt){
                  var html = '';
                  var i;
                  for(i=0; i<krt.length; i++){
                            html += '<option value="'+krt[i].nilai+'">'+krt[i].list+'</option>';
                        }
                  $('#<?php echo $bk['id_kriteria']; ?>').html(html);
              }
          });
        
    });
  <?php endforeach ?>
</script>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <!-- Profile Image -->
        <div class="card card-primary card-outline">
          <div class="card-body box-profile">
            <?php foreach ($onesiswa as $os) { ?>
              <?php $nis = $os['nis']; $idnilai = $os['id_nilai'];?>
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
                    <!-- Value -->

                    <div class="form-group">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">id nilai</label></div>
                        <div class="col-sm-6">
                          <input class="form-control" type="text" name="nis" id="nis" value="<?php echo $idnilai; ?>">
                          </select>
                        </div>
                      </div>
                    </div>

                    <div class="form-group" hidden="off">
                      <div class="row">
                        <div class="col-sm-3"><label for="varchar">nis</label></div>
                        <div class="col-sm-6">
                          <input class="form-control" type="text" name="nis" id="nis" value="<?php echo $nis; ?>">
                          </select>
                        </div>
                      </div>
                    </div>

                    <?php foreach ($bbkriteria as $bk): ?>
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-3"><label for="varchar"><?php echo $bk['nama_kriteria']; ?></label></div>
                          <div class="col-sm-6">
                            <select class="form-control" name="<?php echo $bk['id_kriteria'] ?>" id="<?php echo $bk['id_kriteria'] ?>">
                              <!-- <option value=""></option> -->
                            </select>
                          </div>
                        </div>
                      </div>
                    <?php endforeach ?>
                    <!-- End -->
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