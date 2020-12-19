<div class="main-content">
    <section class="section">

    <div class="section-header">
            <h1>Edit Produk</h1>
            <div class="section-header-breadcrumb">
            <div class="section-header-button">
              <a href="dashboard.php?module=produk" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali Ke data Produk</a>
            </div>
            </div>
          </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <?php
                    include "../lib/koneksi.php";
                    $id_produk = $_GET['id'];
                    $sql = mysqli_query($koneksi, "SELECT * FROM tbl_produk WHERE id_produk = '$id_produk'");
                    $data = mysqli_fetch_assoc($sql);
                    $id_produk = $data['id_produk']; 
                    $nama_produk = $data['nama_produk'];
                    $id_kategori = $data['id_kategori'];
                    $harga = $data['harga'];
                    $jumlah = $data['jumlah'];
                    $gambar = $data['gambar'];
                    $deskripsi = $data['deskripsi']; 
            ?>
            <div class="card">
              <div class="card-body">
              <form action='module/produk/aksi_edit.php' method="post" enctype="multipart/form-data">
                <!-- membawa data dari halaman form tambah -->
                <input type="hidden" name="id_produk" value="<?php echo $data['id_produk'];?>">
                <!-- end -->
                <div class="form-group">
                  <b><label>Nama Produk</label></b>
                  <input type="text" class="form-control" name="nama_produk" value="<?php echo $data['nama_produk'];?>">
                </div>
                <div class="form-group">
                  <b><label>Kategori</label></b>
                    <!-- PHP -->
                    <?php
                        $sqlkategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                        ?>
                  <select class="form-control" name="id_kategori">
                    <?php while( $kategori= mysqli_fetch_array($sqlkategori)){  
                      if($id_kategori==$kategori['id_kategori']){
                        $select ="selected";
                    } else{
                        $select ="";
                    }
                      ?>
                  <option value="<?php echo $kategori['id_kategori'];?>" <?php echo $select;?>><?php echo $kategori['nama_kategori']?></option>
                    <?php } ?>
                    <!-- PHP end -->
                  </select>
                </div>
               <div class="form-group">
                  <b><label>Harga Produk</label></b>
                  <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $data['harga'];?>">
                </div>
                <div class="form-group">
                  <b><label>Jumlah</label></b>
                  <input type="text" class="form-control" name="jumlah" id="jumlah" value="<?php echo $data['jumlah'];?>">
                </div>
                <div class="form-group">
                  <b><label>Gambar Produk</label></b>
                  <div class="col-sm-10">
                    <img src="../../upload<?php echo $gambar;?>" heigt="100" width="150">
                    <input type = "file" class="form-control" name="gambar" id="gambar" value="<?php echo $data['gambar'];?>">
                  </div>
                  </div>
                <div class="form-group">
                    <b><label>Deskripsi Produk</label></b>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $data['deskripsi'];?>">   
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

