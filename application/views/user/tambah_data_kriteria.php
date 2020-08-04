<div class="container-fluid" style="margin-bottom: 100px;">
  <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">

    <div class="form-group" hidden="true">
      <input type="text" class="form-control" name="idlist" id="idlist" readonly value="<?php if (isset($kriteria)) { echo $kriteria->id_list; }?>"/>
    </div>


    <div class="form-group">
      <input type="text" class="form-control" name="kriteria" id="kriteria" readonly value="<?php if (isset($kriteria)) { echo $kriteria->kriteria; } else { echo $idkriteria; }?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Masukkan data</label>
      <input type="text" class="form-control" name="list" id="list" autocomplete="off" placeholder="Masukkan data" value="<?php if (isset($kriteria)) { echo $kriteria->list; }?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Keterangan</label>
      <input type="text" class="form-control" name="ket" id="ket" placeholder="Keterangan" autocomplete="off" value="<?php if (isset($kriteria)) { echo $kriteria->keterangan; }?>" />
    </div>

    <div class="form-group">
      <label for="varchar">Nilai</label>
      <input type="text" class="form-control" name="nilai" id="nilai" placeholder="Nilai" autocomplete="off" value="<?php if (isset($kriteria)) { echo $kriteria->nilai; }?>" />
    </div>

    <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
    <a href="<?php echo base_url('User/input_data_kriteria'); ?>" class="btn btn-danger">Batal</a> 
  </form>
</div>