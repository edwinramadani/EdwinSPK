<div class="container-fluid" style="margin-bottom: 150px;">
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="varchar">ID Kriteria</label>
      <input type="text" class="form-control" name="idkriteria" readonly id="idkriteria" placeholder="Id Kriteria" value="<?php if (isset($kriteria)) { echo $kriteria->id_kriteria; } elseif(isset($new_id)) { echo $new_id; }?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Nama Kriteria</label>
      <input type="text" class="form-control" name="namakriteria" id="namakriteria" autocomplete="off" placeholder="Nama Kriteria" value="<?php if (isset($kriteria)) { echo $kriteria->nama_kriteria; } ?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Bobot</label>
      <input type="text" class="form-control" name="bobot" id="bobot" autocomplete="off" placeholder="Bobot" value="<?php if (isset($kriteria)) { echo $kriteria->bobot; } ?>"/>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/pembobotan_kriteria'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>