<div class="main-content">
    <section class="section">

    <div class="section-header">
            <h1>Tambah Biaya Kirim</h1>
            <div class="section-header-breadcrumb">
            <a href="dashboard.php?module=biaya" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali ke data biaya kirim</a>
            </div>
    </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card">
              <div class="card-body">
              <form action='module/biaya_kirim/aksi_simpan.php' method="post">
                
              <div class="form-group">
                  <b><label>Kota Tujuan</label></b>
                    <!-- PHP -->
                    <?php
                        $sqlkota = mysqli_query($koneksi, "SELECT * FROM tbl_kota");
                    ?>
                  <select class="form-control" name="id_kota">
                    <?php while( $kota= mysqli_fetch_array($sqlkota)){  ?>
                  <option value="<?php echo $kota['id_kota'];?>"><?php echo $kota['nama_kota']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>

                <div class="form-group">
                  <b><label>Kurir</label></b>
                    <!-- PHP -->
                    <?php
                        $sqlkurir = mysqli_query($koneksi, "SELECT * FROM tbl_kurir");
                    ?>
                  <select class="form-control" name="id_kurir">
                    <?php while( $kurir= mysqli_fetch_array($sqlkurir)){  ?>
                  <option value="<?php echo $kurir['id_kurir'];?>"><?php echo $kurir['nama_kurir']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>

                <div class="form-group">
                  <label>Biaya</label>
                  <input type="text" class="form-control" name="biaya" placeholder="Masukan Biaya">
                </div>
                
              </div>
              <div class="card-footer text-right">
                <button class="btn btn-primary mr-1" type="submit">Simpan</button>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

