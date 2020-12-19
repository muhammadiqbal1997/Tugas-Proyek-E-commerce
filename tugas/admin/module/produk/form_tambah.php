<div class="main-content">
    <section class="section">
    <div class="section-header">
            <h1>Tambah Produk</h1>
            <div class="section-header-breadcrumb">
              <div class="section-header-button">
              <a href="dashboard.php?module=produk" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali Ke data Produk</a>
            </div>
            </div>
          </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card">
              <div class="card-body">
              <form action='module/produk/aksi_simpan.php' method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <b><label>Nama Produk</label></b>
                  <input type="text" class="form-control" name="nama_produk" id="nama_produk" placeholder="Masukan Nama produk....">
                </div>
                <div class="form-group">
                  <b><label>Kategori</label></b>
                    <!-- PHP -->
                    <?php
                        $sql = "SELECT * FROM tbl_kategori";
                        $q = mysqli_query($koneksi, $sql);
                    ?>
                  <select class="form-control" name="id_kategori">
                    <?php while( $data= mysqli_fetch_array($q)){  ?>
                  <option value="<?php echo $data['id_kategori'];?>"><?php echo $data['nama_kategori']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>
                <div class="form-group">
                  <b><label>Harga Produk</label></b>
                  <input type="text" class="form-control" name="harga" class="number_format" placeholder="Rp. xxxxx">
                </div>
                <div class="form-group">
                  <b><label>Jumlah</label></b>
                  <input type="text" class="form-control" name="jumlah">
                </div>
                <div class="form-group">
                  <b><label>Gambar Produk</label></b>
                  <input type = "file" class="form-control" name="gambar">
                </div>
                <div class="form-group">
                    <b><label>Deskripsi Produk</label></b>
                    <input type="text" class="form-control" name="deskripsi">   
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

