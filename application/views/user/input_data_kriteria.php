<div class="card">
    <div class="card-header">
      <a href="<?php echo base_url('User/tambah_data_kriteria'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>

      <a href="<?php echo base_url('User/data_kriteria'); ?>" class="btn btn-warning"><i class="fa fa-plus"></i> Kembali</a>
    </div>
    <br>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>List</th>
          <th>Keterangan</th>
          <th>Nilai</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($kriteria as $k) {?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $k['list']; ?></td>
          <td><?php echo $k['keterangan']; ?></td>
          <td><?php echo $k['nilai']; ?></td>
          <td>
            <a href="<?php echo base_url('User/edit_data_kriteria/'.$k['id_list']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?php echo base_url('User/hapus_data_kriteria/'.$k['id_list']); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
        </tr>
      <?php $no++;} ?>
        </tbody>
      </table>
    </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>