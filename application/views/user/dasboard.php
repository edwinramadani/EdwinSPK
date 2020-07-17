<style>
	.small-box {
		border-radius: 5px;
		padding: 10px;
	}
</style>
<div class="main">
	<div>
		<h5>Hai, selamat datang!</h5>
		<p>Selamat datang di sistem pendukung keputusan siswa berpersatasi menggunakan metode moora</p>
	</div>
	<div class="container-fluid" style="margin-bottom: 100px;">
		<!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $jmlsiswa; ?></h3>

                <p>Peserta Didik</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $jmlkelas; ?></h3>

                <p>Kelas</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $jmlkriteria; ?></h3>

                <p>Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              
            </div>
          </div>
	</div>
</div>