<?php 
  $bln = array(1=>"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
  $kls = array(1=>"7A","7B","7C","7D","7E","7F","7G","8A","8B","8C","8D","8E","8F","8G","9A","9B","9C","9D","9E","9F","9G");
?>

<?php if (isset($siswa)) {
  foreach ($siswa as $s) {
    $nis = $s['nis'];
    $nama = $s['nama'];
    $username = $s['username'];
    $password = $s['password'];
    $kelas = $s['kelas'];
    $alamat = $s['alamat'];
    $tempatlahir = $s['tempat_lahir'];
    $tanggallahir = $s['tanggal_lahir'];
    $jenis_kelamin = $s['jenis_kelamin'];
    $agama = $s['agama'];
    $ayahwali = $s['ayah_wali'];
    $ibu = $s['ibu'];
    $tahunmasuk = $s['tahun_masuk'];
    $email = $s['email'];
    $telp = $s['telp'];
    $foto = $s['foto'];
    $blokir = $s['blokir'];
  }
} ?>

<?php 
  $tgl = explode('-', $tanggallahir);
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
    <p>Empty</p>
  <?php endif ?>
<?php } ?>

<?php function bulanname($bl) {
  echo $bl;
  // if ($bl=='01') {
  //   echo $bln[1];
  // } elseif ($bl=='02') {
  //   echo $bln[2];
  // } elseif ($bl=='03') {
  //   echo $bln[3];
  // } elseif ($bl=='04') {
  //   echo $bln[4];
  // } elseif ($bl=='05') {
  //   echo $bln[5];
  // } elseif ($bl=='06') {
  //   echo $bln[6];
  // } elseif ($bl=='07') {
  //   echo $bln[7];
  // } elseif ($bl=='08') {
  //   echo $bln[8];
  // } elseif ($bl=='09') {
  //   echo $bln[9];
  // } elseif ($bl=='10') {
  //   echo $bln[10];
  // } elseif ($bl=='11') {
  //   echo $bln[11];
  // } elseif ($bl=='12') {
  //   echo $bln[12];
  // } else {
  //   echo 'Empty';
  // }
} ?>

<form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="varchar">NIS</label>
    <input type="text" class="form-control" name="nis" id="nis" placeholder="NIS" value="<?php if (isset($siswa)) { echo $nis; } ?>" />
  </div>

  <div class="form-group">
    <label for="varchar">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap" value="<?php if (isset($siswa)) { echo $nama; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php if (isset($siswa)) { echo $username; } ?>" />
  </div>

  <div class="form-group">
    <label for="varchar">Password</label>
    <input type="text" class="form-control" name="password" id="password" placeholder="Password" value="<?php if (isset($siswa)) { echo $password; } ?>" />
  </div>

  <div class="form-group">
    <label for="varchar">Kelas</label>
    <select class="form-control" name="kelas" id="kelas">
      <option value="<?php if (isset($siswa)) { echo $kelas; } ?>"><?php echo $kelas; ?></option>
      <?php for ($i=1; $i <= 21 ; $i++) { 
        echo "<option value=$i>$kls[$i]</option>";
      } ?>
    </select>
  </div>

  <div class="form-group">
    <label for="varchar">Alamat</label>
    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" value="<?php if (isset($siswa)) { echo $alamat; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tempat Lahir</label>
    <input type="text" class="form-control" name="tempatlahir" id="tempatlahir" placeholder="Tempat Lahir" value="<?php if (isset($siswa)) { echo $tempatlahir; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tanggal Lahir</label>
    <div class="row">
      <div class="col-sm-4">
        <select class="form-control" name="tanggal" id="tanggal">
          <?php if (isset($siswa)): ?>

            <option value="<?php if (isset($siswa)) { echo $tgl[2]; } ?>"><?php echo $tgl[2]; ?></option>
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
        <select class="form-control" name="bulan" id="Bulan">
          <?php if (isset($siswa)): ?>
            <option value="<?php echo $tgl[1];?>"><?php bulanname($tgl[1]); ?></option>
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
        <select class="form-control" name="tahun" id="tahun">
          <option value="1980">1980</option>
          <?php $now = date('Y');
          for ($thn=1980; $thn <= $now ; $thn++) { 
            echo "<option value=$thn>$thn</option>";
          } ?>
        </select>
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="varchar">Jenis Kelamin</label>
    <div class="row">
      <div class="col-sm-2 form-check form-check-inline">
        <input type="radio" class="form-check-input" name="jeniskelamin" id="jeniskelamin1" value="1" <?php if (isset($siswa)) { if ($jeniskelamin == 1) { echo "checked"; } else { echo "checked"; }}; ?>/>
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
    <input type="text" class="form-control" name="ayahwali" id="ayahwali" placeholder="Nama Ayah/Wali" value="<?php if (isset($siswa)) { echo $ayahwali; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Nama Ibu</label>
    <input type="text" class="form-control" name="namaibu" id="namaibu" placeholder="Nama Ibu" value="<?php if (isset($siswa)) { echo $ibu; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Tahun Masuk</label>
    <input type="text" class="form-control" name="thmasuk" id="thmasuk" placeholder="Tahun Masuk" value="<?php if (isset($siswa)) { echo $tahunmasuk; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Email</label>
    <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php if (isset($siswa)) { echo $email; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">No HP/Telp</label>
    <input type="text" class="form-control" name="telp" id="telp" placeholder="No HP/Telp" value="<?php if (isset($siswa)) { echo $telp; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Foto</label>
    <input type="file" class="form-control" name="foto" id="foto" value="<?php if (isset($siswa)) { echo $foto; } ?>"/>
  </div>

  <div class="form-group">
    <label for="varchar">Blokir</label>
    <div class="row">
      <div class="col-sm-1 form-check form-check-inline">
        <input type="radio" class="form-check-input" name="blokir" id="blokir1" value="1" <?php if (isset($siswa)) { if ($blokir == 1) { echo "checked"; } else { echo "checked"; }}; ?> />
        <label class="form-check-lable" for="blokir1">Iya</label>
      </div>
      <div class="col-sm-1 form-check form-check-inline">
        <input type="radio" class="form-check-input" name="blokir" id="blokir2" value="2" <?php if (isset($siswa)) { if ($blokir == 2) { echo "checked"; } };
          ?>/>
        <label class="form-check-lable" for="blokir2">Tidak</label>
      </div>
    </div>
  </div>

  <button type="submit" class="btn btn-primary"><?php echo $button; ?></button>
  <a href="<?php echo base_url('User/data_siswa'); ?>" class="btn btn-danger">Batal</a> 
</form>