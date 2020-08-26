<div class="card">
  <?php
    $ttl1 =0;
    $ttl2 =0;
    $ttl3 =0;
    $ttl4 =0;
    $ttl5 =0;
     //echo $krt1->bobot;
    //var_dump($m1);
    foreach ($siswa as $s) {
      $ttl1 += pow($s['krt1'], 2);
      $ttl2 += pow($s['krt2'], 2);
      $ttl3 += pow($s['krt3'], 2);
      $ttl4 += pow($s['krt4'], 2);
      $ttl5 += pow($s['krt5'], 2);
    }
  ?>
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <td>krt 1</td>
          <td>krt 2</td>
          <td>krt 3</td>
          <td>krt 4</td>
          <td>krt 5</td>
          <td>nilai Y</td>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1;
        
        foreach ($siswa as $s) { 
          $x1 = $s['krt1']/sqrt($ttl1);
          $x2 = $s['krt2']/sqrt($ttl2);
          $x3 = $s['krt3']/sqrt($ttl3);
          $x4 = $s['krt4']/sqrt($ttl4);
          $x5 = $s['krt5']/sqrt($ttl5);
          $nilaiy =($x1*$krt1->bobot/100)+($x2*$krt2->bobot/100)+($x3*$krt3->bobot/100)+($x4*$krt4->bobot/100)+($x5*$krt5->bobot/100);

        ?>
        <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $s['nama']; ?></td>
          <td><?php echo $s['krt1']; ?></td>
          <td><?php echo $s['krt2']; ?></td>
          <td><?php echo $s['krt3']; ?></td>
          <td><?php echo $s['krt4']; ?></td>
          <td><?php echo $s['krt5']; ?></td>
          <td><?php echo round($nilaiy, 2);?></td>
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