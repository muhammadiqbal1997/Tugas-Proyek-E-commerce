
<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Menu Merek</h1>
            <div class="section-header-breadcrumb">
              <div class="section-header-button">
              <a href="dashboard.php?module=tambah_merek" class="btn btn-success">Tambah Merek <i class="fas fa-plus"></i></a>
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <?php 
                  $sql = "SELECT * FROM tbl_merek";
                  $q = mysqli_query($koneksi, $sql);
                  ?>
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Nama Merek</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <?php while( $data= mysqli_fetch_array($q)){  ?>
                      <tr>
                        <td class="font-weight-600"><?php echo $data['nama_merek']; ?></td>
                        <td>
                        <a href="dashboard.php?module=edit_merek&id=<?php echo $data['id_merek']; ?>" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="module/merek/aksi_hapus.php?id=<?php echo $data['id_merek']; ?>" class="btn btn-icon btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      

