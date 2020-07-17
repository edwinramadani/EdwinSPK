<div class="card">
    <div class="card-header">
      <a href="<?php echo base_url('User/tambah_data_administrator'); ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Administrator</a>
    </div>
    <br>

    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Username</th>
          <th>Nama</th>
          <th>Level</th>
          <th>Alamat</th>
          <th>Email</th>
          <th>Telp/HP</th>
          <th>Blokir</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
       	<?php for ($i=0; $i <= 100; $i++) { ?>
        <tr>
          <td>1</td>
          <td>admin123</td>
          <td>Admin
          </td>
          <td>admin</td>
          <td>Jl. Keindahan hutabn</td>
          <td>Baik@gmail.com</td>
          <td>078459</td>
          <td>N</td>
          <td>
          	<a href="<?php echo base_url('User/edit_data_administrator'); ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
        </tr>
    	<?php } ?>
        </tbody>
        <tfoot>
        <tr>
          <th>Rendering engine</th>
          <th>Browser</th>
          <th>Platform(s)</th>
          <th>Engine version</th>
          <th>CSS grade</th>
        </tr>
        </tfoot>
      </table>
    </div>
</div>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>