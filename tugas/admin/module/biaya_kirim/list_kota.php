
<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Menu Kota</h1>
            <div class="section-header-breadcrumb">
            <a href="dashboard.php?module=tambah_kota" class="btn btn-success">Tambah Kota <i class="fas fa-plus"></i></a>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <?php 
                  $sql = "SELECT * FROM tbl_kota";
                  $q = mysqli_query($koneksi, $sql);
                  ?>
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <th>Nama Kota</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <?php while( $data= mysqli_fetch_array($q)){  ?>
                      <tr>
                        <td class="font-weight-600"><?php echo $data['nama_kota']; ?></td>
                        <td>
                        <a href="dashboard.php?module=edit_kota&id=<?php echo $data['id_kota']; ?>" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="module/biaya_kirim/aksi_hapus_kota.php?id=<?php echo $data['id_kota']; ?>" class="btn btn-icon btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
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
      

