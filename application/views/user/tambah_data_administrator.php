<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Unsername</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Password</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="password" id="password" placeholder="Password" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Nama Lengkap</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Alamat</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="Alamat" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Email</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="email" id="email" placeholder="Email" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Telp/HP</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="No HP/Telp" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Level</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="level" id="level" placeholder="Level" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Blokir</label></div>
      <div class="col-sm-6">
        <div class="row">
          <div class="col-sm-1 form-check form-check-inline">
            <input type="radio" class="form-check-input" name="inlineRadioOption" id="inlineRadio1" value="option1"/>
            <label class="form-check-lable" for="inlineRadio1">Iya</label>
          </div>
          <div class="col-sm-1 form-check form-check-inline">
            <input type="radio" class="form-check-input" name="inlineRadioOption" id="inlineRadio2" value="option2"/>
            <label class="form-check-lable" for="inlineRadio2">Tidak</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
  <a href="<?php echo base_url('User/data_administrator'); ?>" class="btn btn-danger">Batal</a> 
</form>