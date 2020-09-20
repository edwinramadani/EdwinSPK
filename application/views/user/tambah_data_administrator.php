<?php echo validation_errors(); ?>

<?php echo form_open($form); ?>
  
  <?php if ($button == 'Edit'): ?>
    <div class="form-group" hidden="true">
      <input type="text" class="form-control" name="id" id="id" placeholder="Username" hidden value="<?php if (isset($admin)) { echo $admin->id_user; } ?>"/>
    </div>
  <?php endif ?>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Username</label></div>
      <div class="col-sm-6">

        <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php if (isset($admin)) { echo $admin->username; } ?>" />
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Password</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php if (isset($admin)) { echo $admin->password; } ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Nama Lengkap</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php if (isset($admin)) { echo $admin->nama_admin; } ?>"/>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Alamat</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php if (isset($admin)) { echo $admin->alamat_admin; } ?>"/>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Telp/HP</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="telp" id="telp" placeholder="No HP/Telp" value="<?php if (isset($admin)) { echo $admin->telp_admin; } ?>"/>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="col-sm-3"><label for="varchar">Level</label></div>
      <div class="col-sm-6">
        <input type="text" class="form-control" name="level" id="level" readonly placeholder="Level" value="<?php if (isset($admin)) { echo $admin->level; } else {echo 'admin';} ?>"/>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
  <a href="<?php echo base_url('User/data_administrator'); ?>" class="btn btn-danger">Batal</a> 
</form>