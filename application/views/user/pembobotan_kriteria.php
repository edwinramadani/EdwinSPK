<div class="card">
    <div class="card-header">
      <a href="<?php echo base_url('User/tambah_pembobotan_kriteria'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kriteria</a>
    </div>
    <br>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kriteria</th>
          <th>Bobot</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($pembobotankriteria as $pk) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $pk['nama_kriteria']; ?></td>
          <td><?php echo $pk['bobot']; ?></td>
          <td>
            <a href="<?php echo base_url('User/edit_pembobotan_kriteria'); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?php echo base_url('User/hapus_pembobotan_kriteria'); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
        </tr>
      <?php } ?>
        </tbody>
      </table>
    </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>