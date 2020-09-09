<div class="main">
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
          <td>nilai Y</td>
          <td>Ranking</td>
        </tr>
        </thead>
        <tbody>
        <?php
        $data = array();
        foreach ($siswa as $s) { 
          $x1 = $s['krt1']/sqrt($ttl1);
          $x2 = $s['krt2']/sqrt($ttl2);
          $x3 = $s['krt3']/sqrt($ttl3);
          $x4 = $s['krt4']/sqrt($ttl4);
          $x5 = $s['krt5']/sqrt($ttl5);
          $Maximum =($x1*$krt1->bobot/100)+($x3*$krt3->bobot/100)+($x4*$krt4->bobot/100)+($x5*$krt5->bobot/100);
          $Minimum =($x2*$krt2->bobot/100);

          $data[] = array(
          	"nilai" => round($Maximum, 2) - round($Minimum, 2),
          	"nama" => $s['nama']
          	
          );

		}
        ?>

        <?php arsort($data); $no=1; foreach ($data as $dt): ?>
        	<tr>
        		<td><?php echo $no; ?></td>
        		<td><?php echo $dt['nama']; ?></td>
        		<td><?php echo $dt['nilai']; ?></td>
        		<td>Ranking ke-<?php echo $no; ?></td>
        	</tr>
        <?php $no++; endforeach ?>
        </tbody>
      </table>
    </div>
</div>