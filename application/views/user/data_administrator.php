<div class="card">
    <div class="card-header">
      <a href="<?php echo base_url('User/tambah_data_administrator'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Administrator</a>
    </div>
    <br>

    <?php if($this->session->flashdata('msg')): ?>
      <p><?php echo $this->session->flashdata('msg'); ?></p>
    <?php endif; ?>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Telp/HP</th>
          <th>Level</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
       	<?php $no = 1; foreach ($admin as $adm): ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $adm['username']; ?></td>
            <td><?php echo $adm['nama_admin']; ?></td>
            <td><?php echo $adm['alamat_admin']; ?></td>
            <td><?php echo $adm['telp_admin']; ?></td>
            <td><?php echo $adm['level']; ?></td>
            <td>
              <a href="<?php echo base_url('User/edit_data_administrator/').$adm['id_user']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
              <a href="<?php echo base_url('User/hapus_data_administrator/').$adm['id_user']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a></td>
          </tr>
        <?php $no++; endforeach ?>
        </tbody>
      </table>
    </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>