<div class="container-fluid">
        <div class="row">
          <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
              
              <div class="card-body">
                <table border="border-left-info" class="table table-bordered" id="dataTable" width="100%"
                  cellspacing="0">
                  <thead align="center">
                    <th>ID</th>
                    <th>Alat Mining</th>
                    <th>Harga ($)</th>
                    <th>Kecepatan (Kh/s)</th>
                    <th>Daya Listrik (Watt)</th>
                    <th>Keuntungan/Hari ($)</th>
                    <th>Detail</th>
                  </thead>
                  <tbody>

                    <?php foreach ($result as $row) { ?>
                    <tr>
                      <td align="center"><?php echo $row['id_alat']; ?></td>
                      <td align="center"><?php echo $row['alatmining']; ?></td>
                      <td align="center"><?php echo number_format($row['harga']); ?></td>
                      <td align="center"><?php echo $row['kecepatan']; ?></td>
                      <td align="center"><?php echo $row['listrik']; ?>W</td>
                      <td align="center"><?php echo $row['keuntungan']; ?></td>
                      <td align="center">
                        <a class="btn btn-info btn-icon-split"
                          href="data_alat_mining_detail.php?id_alat=<?php echo $row['id_alat'] ?>">
                          <span class="icon text-white">
                            <i class="fas fa-info-circle"></i>
                          </span>
                        </a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>