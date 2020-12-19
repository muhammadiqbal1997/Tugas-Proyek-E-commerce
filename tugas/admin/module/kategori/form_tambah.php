<div class="main-content">
    <section class="section">
    <div class="section-header">
            <h1>Tambah Kategori</h1>
            <div class="section-header-breadcrumb">
              <div class="section-header-button">
              <a href="dashboard.php?module=kategori" class="btn btn-success"><i class="fas fa-chevron-left"></i> Kembali ke data kategori </a>
            </div>
            </div>
          </div>

      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <div class="card">
              <div class="card-body">
              <form action='module/kategori/aksi_simpan.php' method="post">
                <div class="form-group">
                  <label>Nama Kategori</label>
                  <input type="text" class="form-control" name="nama_kategori" placeholder="Masukan Nama Kategori" id="nama_kategori">
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

