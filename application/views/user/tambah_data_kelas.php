<div class="container-fluid" style="margin-bottom: 150px;">
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="varchar">ID Kelas</label>
      <input type="text" class="form-control" name="idkelas" id="idkelas" placeholder="Id Kelas" />
    </div>

    <div class="form-group">
      <label for="varchar">Nama Kelas</label>
      <input type="text" class="form-control" name="namakelas" id="namakelas" placeholder="Nama Kelas" />
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/data_kelas'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>