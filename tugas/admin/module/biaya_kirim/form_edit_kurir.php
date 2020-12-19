<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Edit Kurir</h1>
            <div class="section-header-breadcrumb">
            <a href="dashboard.php?module=kurir" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali ke data kurir </a>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <?php
                    include "../lib/koneksi.php";
                    $id_kurir=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_kurir` WHERE id_kurir ='$id_kurir'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                                        
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/biaya_kirim/aksi_edit_kurir.php' method="post">
                  <input type="hidden" name="id_kurir" value="<?php echo $data['id_kurir'];?>">
                  <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" class="form-control" name="nama_kurir" value="<?php echo $data['nama_kurir'];?>">
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
      

