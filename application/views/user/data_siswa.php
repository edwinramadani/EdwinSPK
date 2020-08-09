<div class="card">
    <div class="card-header">
      <a href="<?php echo $url; ?>" class="btn btn-primary"><i class="fa fa-plus"></i> <?php echo $button; ?></a>
    </div>
    <br>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped"> 
        <thead>
        <tr>
          <th>No</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
       	<?php $no = 1; foreach ($siswa as $s) { ?>
        <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $s['nis']; ?></td>
          <td><?php echo $s['nama']; ?></td>
          <td><?php echo $s['kelas']; ?></td>
          <td><?php if ($s['jenis_kelamin'] == 1) {
            echo "Laki-laki";
          } elseif ($s['jenis_kelamin'] == 2) {
            echo "Perempuan";
          } ?></td>
          <td>
          	<a href="<?php echo base_url('User/detail_data_siswa/'.$s['nis']); ?>" class="btn btn-warning"><i class="fa fa-eye"></i> Detail</a>
          	<a href="<?php echo base_url('User/edit_data_siswa/'.$s['nis']); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
          	<a href="<?php echo base_url('User/hapus_data_siswa/'.$s['nis']); ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
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