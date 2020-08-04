<div class="card">
    <div class="card-header">
      <a href="<?php echo base_url('User/tambah_data_kelas'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Kelas</a>
    </div>
    <br>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>ID Kelas</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no = 1; foreach ($kelas as $k) { ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $k['id_kelas']; ?></td>
          <td><?php echo $k['nama_kelas']; ?></td>
          <td>
            <a href="<?php echo base_url('User/lihat_siswa'); ?>" class="btn btn-warning"><i class="fa fa-eye"></i> Lihat Siswa</a>
            <a href="<?php echo base_url('User/edit_data_kelas/').$k['id_kelas']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?php echo base_url('User/hapus_data_kelas/').$k['id_kelas']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
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