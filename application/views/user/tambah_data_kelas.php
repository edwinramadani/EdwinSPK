<div class="container-fluid" style="margin-bottom: 150px;">
  <form action="<?php echo $action; ?>" method="post">
    <div class="form-group">
      <label for="varchar">ID Kelas</label>
      <input type="text" class="form-control" name="idkelas" id="idkelas" placeholder="Id Kelas" value="<?php if (isset($kelas)) { echo $kelas->id_kelas; } elseif(isset($new_id)) { echo $new_id; }?>" readonly/>
    </div>

    <div class="form-group">
      <label for="varchar">Nama Kelas</label>
      <input type="text" class="form-control" name="namakelas" id="namakelas" autocomplete="off" placeholder="Nama Kelas" value="<?php if (isset($kelas)) { echo $kelas->nama_kelas; } ?>"/>
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/data_kelas'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>