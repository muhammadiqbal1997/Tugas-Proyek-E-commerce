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
              <?php
                    include "../lib/koneksi.php";
                    $id_biaya_kirim=$_GET['id'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM `tbl_biaya_kirim` WHERE id_biaya_kirim ='$id_biaya_kirim'");
                    $data = mysqli_fetch_array($sql);
                    $id_biaya_kirim = $data['id_biaya_kirim'];
                    $id_kota = $data['id_kota'];
                    $id_kurir = $data['id_kurir'];
                    $biaya = $data['biaya'];
                                        
                  ?>
              <form action='module/biaya_kirim/aksi_edit.php' method="post">
              <input type="hidden" name="id_biaya_kirim" value="<?php echo $data['id_biaya_kirim'];?>">
              <div class="form-group">
                  <b><label>Kota Tujuan</label></b>
                    <!-- PHP -->
                    <?php
                        $sqlkota = mysqli_query($koneksi, "SELECT * FROM tbl_kota");
                    ?>
                  <select class="form-control" name="id_kota">
                    <?php while( $kota= mysqli_fetch_array($sqlkota)){  
                        if($id_kota==$kota['id_kota']){
                            $select ="selected";
                        } else{
                            $select ="";
                        }
                        ?>
                  <option value="<?php echo $kota['id_kota'];?>" <?php echo $select;?>><?php echo $kota['nama_kota']?></option>
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
                    <?php while( $kurir= mysqli_fetch_array($sqlkurir)){  
                        if($id_kurir==$kurir['id_kurir']){
                            $select ="selected";
                        } else{
                            $select ="";
                        }
                        ?>
                  <option value="<?php echo $kurir['id_kurir'];?> "<?php echo $select;?>><?php echo $kurir['nama_kurir']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>

                <div class="form-group">
                  <label>Biaya</label>
                  <input type="text" class="form-control" name="biaya" value="<?php echo $biaya;?>">
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

