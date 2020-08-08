<div class="card">

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Aksi</th>
          <td>krt 1</td>
          <td>krt 2</td>
          <td>krt 3</td>
          <td>krt 4</td>
          <td>krt 5</td>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($siswa as $s) { ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $s['nama']; ?></td>
          <td><?php echo $s['krt1']; ?></td>
          <td><?php echo $s['krt2']; ?></td>
          <td><?php echo $s['krt3']; ?></td>
          <td><?php echo $s['krt4']; ?></td>
          <td><?php echo $s['krt5']; ?></td>
          <td>
            <a href="<?php echo base_url('User/edit_klasifikasi/'.$s['nis'].'/'.$s['id_nilai']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
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