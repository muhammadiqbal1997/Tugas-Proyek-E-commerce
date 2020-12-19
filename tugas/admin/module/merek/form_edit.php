<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Edit Merek</h1>
            <div class="section-header-breadcrumb">
            <div class="section-header-button">
              <a href="dashboard.php?module=merek" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali Ke data Merek</a>
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <?php
                    include "../lib/koneksi.php";
                    $id_merek=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_merek` WHERE id_merek='$id_merek'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                    
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/merek/aksi_edit.php' method="post">
                  <input type="hidden" name="id_merek" value="<?php echo $data['id_merek']; ?>">
                  <div class="form-group">
                      <label>Nama Merek</label>
                      <input type="text" class="form-control" name="nama_merek" value="<?php echo $data['nama_merek']; ?>">
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
      

