<div class="container-fluid" style="margin-bottom: 150px;">
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="varchar">Nama Kriteria</label>
      <input type="text" class="form-control" name="namakriteria" id="namakriteria" placeholder="Nama Kriteria" />
    </div>

    <div class="form-group">
      <label for="varchar">Bobot</label>
      <input type="text" class="form-control" name="bobot" id="bobot" placeholder="Bobot" />
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/pembobotan_kriteria'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>