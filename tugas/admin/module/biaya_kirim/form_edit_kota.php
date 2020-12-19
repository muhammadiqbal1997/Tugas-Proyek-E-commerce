<div class="main-content">
        <section class="section">

        <div class="section-header">
          <h1>Edit Nama Kota</h1>
          <div class="section-header-breadcrumb">
          <a href="dashboard.php?module=kota" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali ke data kota</a>
          </div>
        </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <?php
                    include "../lib/koneksi.php";
                    $id_kota=$_GET['id'];
                    $sql = "SELECT * FROM `tbl_kota` WHERE id_kota ='$id_kota'";
                    $result = mysqli_query($koneksi, $sql);
                    $data = mysqli_fetch_assoc($result);
                                        
                  ?>
                <div class="card">
                  <div class="card-body">
                  <form action='module/biaya_kirim/aksi_edit_kota.php' method="post">
                  <input type="hidden" name="id_kota" value="<?php echo $data['id_kota'];?>">
                  <div class="form-group">
                      <label>Nama Kota</label>
                      <input type="text" class="form-control" name="nama_kota" value="<?php echo $data['nama_kota'];?>">
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
      

