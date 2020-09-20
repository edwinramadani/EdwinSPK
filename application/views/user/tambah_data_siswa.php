
<?php 
  $bln = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
?>

<?php if (isset($siswa)) {
  foreach ($siswa as $s) {
    $nis = $s['nis'];
    $nama = $s['nama'];
    $id_kls = $s['id_kelas'];
    $kls = $s['nama_kelas'];
    $alamat = $s['alamat'];
    $tempatlahir = $s['tempat_lahir'];
    $tanggallahir = $s['tanggal_lahir'];
    $jeniskelamin = $s['jenis_kelamin'];
    $agama = $s['agama'];
    $ayahwali = $s['ayah_wali'];
    $ibu = $s['ibu'];
    $tahunmasuk = $s['tahun_masuk'];
    $email = $s['email'];
    $telp = $s['telp'];
    $foto = $s['foto'];
  }
} ?>

<?php 
  $tgl = explode('-', $tanggallahir);
  $tg = $tgl[2];
  $bl = (string) $tgl[1];
  $th = $tgl[0];
?>

<?php function agama($agama) {?>
  <?php if ($agama == 1): ?>
    <p>Islam</p>
  <?php elseif ($agama == 2): ?>
    <p>Krinten</p>
  <?php elseif ($agama == 3): ?>
    <p>Katolik</p>
  <?php elseif ($agama == 4): ?>
    <p>Hindu</p>
  <?php elseif ($agama == 5): ?>
    <p>Budha</p>
  <?php else: ?>
    <p>Pilih Agama</p>
  <?php endif ?>
<?php } ?>

<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="varchar">NIS</label>
    <?php if (isset($siswa)): ?>
      <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" readonly value="<?php if (isset($siswa)) { echo $nis; } ?>" />
    <?php else: ?>
      <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" autocomplete="off" value="<?php if (isset($siswa)) { echo $nis; } ?>" />
    <?php endif ?>
  </div>

  <div class="form-group">
    <label for="varchar">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" autocomplete="off" value="<?php if (isset($siswa)) { echo $nama; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Kelas</label>
    <select class="form-control" name="kelas" id="kelas">

      <option value="<?php if (isset($siswa)) { echo $id_kls; } else {echo ""; } ?>"><?php if (isset($siswa)) { echo $kls; } else { echo "Pilih Kelas"; } ?></option>

      <?php foreach ($kelas as $kl): ?>
         <option value="<?php echo $kl['id_kelas']; ?>"><?php echo $kl['nama_kelas']; ?></option>;
      <?php endforeach ?>
           
    </select>
  </div>

  <div class="form-group">
    <label for="varchar">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" autocomplete="off" value="<?php if (isset($siswa)) { echo $alamat; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" autocomplete="off" value="<?php if (isset($siswa)) { echo $tempatlahir; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tanggal Lahir</label>
    <div class="row">
      <div class="col-sm-4">
        <!-- <?php echo $tg; ?> -->
        <select class="form-control" name="tanggal" id="tanggal">
          <?php if (isset($siswa)): ?>
            
            <option selected value="<?php if (isset($siswa)) { echo $tg; } ?>" ><?php echo $tg; ?></option>
            <?php for ($tgl=1; $tgl <= 31 ; $tgl++) { 
              $tgl_leng = strlen($tgl);
              if ($tgl_leng==1) {
                $i="0".$tgl;
              } else {
                $i = $tgl;
              }
              echo "<option value=$i>$i</option>";
            } ?>

          <?php else: ?>
            <option value="01">01</option>
            <?php for ($tgl=2; $tgl <= 31 ; $tgl++) { 
              $tgl_leng = strlen($tgl);
              if ($tgl_leng==1) {
                $i="0".$tgl;
              } else {
                $i = $tgl;
              }
              echo "<option value=$i>$i</option>";
            } ?>
            <?php endif ?>
          
        </select>
      </div>
      <div class="col-sm-4">
        <!-- <?php var_dump($bl); ?> -->
        <select class="form-control" name="bulan" id="Bulan">
          <?php if (isset($siswa)): ?>
            <?php 
              if ($bl[0] == "0") {
                $j = (int) $bl[1];
              } else {
                $j = (int) $bl;
              }
            ?>
            <option selected value="<?php echo $bl; ?>" ><?php echo $bln[$j]; ?></option>

            <?php for ($bulan=1; $bulan <= 12 ; $bulan++) { 
              $bln_leng = strlen($bulan);
              if ($bln_leng==1) {
                $i="0".$bulan;
              } else {
                $i = $bulan;
              }
              echo "<option value=$i>$bln[$bulan]</option>";
            } ?>

          <?php else: ?>
            <option value="01">Januari</option>
            <?php for ($bulan=2; $bulan <= 12 ; $bulan++) { 
              $bln_leng = strlen($bulan);
              if ($bln_leng==1) {
                $i="0".$bulan;
              } else {
                $i = $bulan;
              }
              echo "<option value=$i>$bln[$bulan]</option>";
            } ?>
          <?php endif ?>
        </select>
      </div>
      <div class="col-sm-4">
        <!-- <?php echo $th; ?> -->
        <select class="form-control" name="tahun" id="tahun">
          <?php if (isset($siswa)): ?>
            
            <option selected value="<?php if (isset($siswa)) { echo $th; } ?>" ><?php echo $th; ?></option>
            <?php $now = date('Y');
            for ($thn=1980; $thn <= $now ; $thn++) { 
              echo "<option value=$thn>$thn</option>";
            } ?>

          <?php else: ?>
            <option value="1980">1980</option>
            <?php $now = date('Y');
            for ($thn=1980; $thn <= $now ; $thn++) { 
              echo "<option value=$thn>$thn</option>";
            } ?>
          <?php endif ?>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="varchar">Jenis Kelamin</label>
    <div class="row">
      <div class="col-sm-2 form-check form-check-inline">
        <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin1" value="1" <?php if (isset($siswa)) { if ($jeniskelamin == 1) { echo "checked"; } else {echo "checked";}}; ?>/>
        <label class="form-check-lable" for="jeniskelamin1">Laki - Laki</label>
      </div>
      <div class="col-sm-2 form-check form-check-inline">
        <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin2" value="2" <?php if (isset($siswa)) { if ($jeniskelamin == 2) { echo "checked"; }}; ?>/>
        <label class="form-check-lable" for="jeniskelamin2">Perempuan</label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="varchar">Agama</label>
    <select class="form-control" name="agama" id="agama">
      <option value="<?php if (isset($siswa)) { echo $agama; } ?>"><?php agama($agama) ?></option>
      <option value="1">Islam</option>
      <option value="2">Kristen</option>
      <option value="3">Katolik</option>
      <option value="4">Hindu</option>
      <option value="5">Budha</option>
    </select>
  </div>

  <div class="form-group">
    <label for="varchar">Nama Ayah/Wali</label>
    <input type="text" class="form-control" name="ayahwali" id="ayahwali" placeholder="Nama Ayah/Wali" autocomplete="off" value="<?php if (isset($siswa)) { echo $ayahwali; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Nama Ibu</label>
    <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="Nama Ibu" autocomplete="off" value="<?php if (isset($siswa)) { echo $ibu; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tahun Masuk</label>
    <input type="text" class="form-control" name="thmasuk" id="thmasuk" placeholder="Tahun Masuk" autocomplete="off" value="<?php if (isset($siswa)) { echo $tahunmasuk; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email" autocomplete="off" value="<?php if (isset($siswa)) { echo $email; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">No HP/Telp</label>
    <input type="text" class="form-control" name="telp" id="telp" placeholder="No HP/Telp" autocomplete="off" value="<?php if (isset($siswa)) { echo $telp; } ?>"/>
  </div>

  <?php if (!isset($siswa)): ?>
    <div class="form-group">
      <label for="varchar">Foto</label>
      <input type="file" class="form-control" name="foto" id="foto"/>
    </div>
  <?php endif ?>

  <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
  <a href="<?php echo base_url('User/data_siswa'); ?>" class="btn btn-danger">Batal</a> 
</form>