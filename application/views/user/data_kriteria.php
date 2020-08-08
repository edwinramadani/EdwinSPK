<div class="card">

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama Kriteria</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($kriteria as $k) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $k['nama_kriteria']; ?></td>
          <td>
            <a href="<?php echo base_url('User/input_data_kriteria/'.$k['id_kriteria']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Input Data Kriteria</a>
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