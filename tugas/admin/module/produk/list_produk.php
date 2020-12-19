<div class="main-content">
        <section class="section">
        <div class="section-header">
            <h1>Menu Produk</h1>
            <div class="section-header-breadcrumb">
              <div class="section-header-button"> 
              <a href="dashboard.php?module=tambah_produk" class="btn btn-success">Tambah Produk <i class="fas fa-plus"></i></a>
            </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                  <?php 
                  $sql = "SELECT * FROM tbl_produk";
                  $q = mysqli_query($koneksi, $sql);
                  ?>
                    <table class="table table-striped">
                      <thead>
                      <tr>
                        <!-- <th>ID Produk</th> -->
                        <th>Gambar Produk</th>
                        <th>Nama Produk</th>
                        <th>Harga Produk</th>
                        <th>Jumlah</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                      </thead>
                      <?php while( $data= mysqli_fetch_array($q)){  ?>
                      <tr>
                        <!-- <td class="font-weight-600"><?php echo $data['id_produk']; ?></td> -->
                        <td class="gallery-item" data-title="Image 1">
                        <img src = "upload/<?php echo $data['gambar'];?>" height="200" width="175">
                        </td>
                        <td class="font-weight-600"><?php echo $data['nama_produk']; ?></td>
                        <td class="font-weight-600">Rp. <?php echo number_format($data['harga']); ?></td>
                        <td class="font-weight-600"><?php echo $data['jumlah']; ?></td>
                        <td class="font-weight-600"><?php echo $data['deskripsi']; ?></td>
                        <td>
                        <a href="dashboard.php?module=edit_produk&id=<?php echo $data['id_produk']; ?>" class="btn btn-icon btn-primary"><i class="fas fa-pencil-alt"></i></a>
                        <a href="module/produk/aksi_hapus.php?id=<?php echo $data['id_produk']; ?>" class="btn btn-icon btn-danger" onclick="return confirm('yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></a>
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
      

