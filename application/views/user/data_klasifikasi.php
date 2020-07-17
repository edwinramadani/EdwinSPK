<div class="card">

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($siswa as $s) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $s['nis']; ?></td>
          <td><?php echo $s['nama']; ?></td>
          <td><?php echo $s['kelas']; ?></td>
          <td>
            <a href="<?php echo base_url('User/edit_klasifikasi/'.$s['nis']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit Klasisfikasi</a>
        </tr>
      <?php $no++; } ?>
        </tbody>
      </table>
    </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>