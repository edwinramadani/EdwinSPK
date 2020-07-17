<div class="container-fluid" style="margin-bottom: 100px;">
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
      <input type="text" class="form-control" name="kriteria" id="kriteria" value="<?php echo $idkriteria ?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Masukkan data</label>
      <input type="text" class="form-control" name="list" id="list" placeholder="Masukkan data" />
    </div>

    <div class="form-group">
      <label for="varchar">Keterangan</label>
      <input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" />
    </div>

    <div class="form-group">
      <label for="varchar">Nilai</label>
      <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai" />
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/input_data_kriteria'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>