<!-- Main Container -->
<section class="main-container col2-left-layout bounceInUp animated">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-9 col-sm-push-3">
          
          <article class="col-main">
            
            <div class="category-products">
              <ul class="products-grid">
                <li class="item col-lg-4 col-md-3 col-sm-4 col-xs-6">
                  <div class="item-inner">
                    <div class="item-img">
                      <div class="item-img-info"><a href="#" title="Retis lapen casen" class="product-image"><img src="assets/products-images/product.jpg" alt="Retis lapen casen"></a>
                        <div class="new-label new-top-left">New</div>
                        <div class="actions">
                          <div class="quick-view-btn"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick View"> <span>Quick View</span></a></div>
                          <div class="link-wishlist"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Wishlist"><span>Add to Wishlist</span></a></div>
                          <div class="link-compare"><a href="#" data-toggle="tooltip" data-placement="right" title="" data-original-title="Compare"><span>Add to Compare</span></a></div>
                          <div class="add_cart">
                            <button class="button btn-cart" type="button" data-toggle="tooltip" data-placement="right" title="" data-original-title="Add to Cart"><span>Add to Cart</span></button>
                          </div>
                        </div>
                        <div class="rating">
                          <div class="ratings">
                            <div class="rating-box">
                              <div class="rating" style="width:80%"></div>
                            </div>
                            <p class="rating-links"><a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="item-info">
                      <div class="info-inner">
                        <div class="item-title"><a href="#" title="Retis lapen casen">Retis lapen casen</a> </div>
                        <div class="item-content">
                          <div class="item-price">
                            <div class="price-box"><span class="regular-price"><span class="price">$125.00</span> </span> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
             
              </ul>
            </div>
          </article>
          <!--	///*///======    End article  ========= //*/// --> 
        </div>
        <div class="col-left sidebar col-sm-3 col-xs-12 col-sm-pull-9">
          <aside class="col-left sidebar">
            <div class="side-nav-categories">
              <div class="block-title"> Kategori </div>
              <!--block-title--> 
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <ul>
                  <?php
                  $kat=mysqli_query($koneksi, "SELECT * FROM tbl_kategori");
                  while($data=mysqli_fetch_array($kat)){
                  ?>
                  <li class="last"> <a href="#"><i class="fas fa fa-chevron-circle-right"></i>  <?php echo $data['nama_kategori'];?></a> </li>
                  <?php } ?>
                </ul>
              </div>
              <!--box-content box-category--> 
            </div>
            
			<div class="side-nav-categories">
              <div class="block-title"> Merek </div>
              <!--block-title--> 
              <!-- BEGIN BOX-CATEGORY -->
              <div class="box-content box-category">
                <ul>
                  <?php
                  $kat=mysqli_query($koneksi, "SELECT * FROM tbl_merek");
                  while($data=mysqli_fetch_array($kat)){
                  ?>
                  <li class="last"> <a href="#"><i class="fas fa fa-chevron-circle-right"></i>  <?php echo $data['nama_merek'];?></a> </li>
                  <?php } ?>
                </ul>
              </div>
              <!--box-content box-category--> 
            </div>
			</aside>
        </div>
      </div>
    </div>
  </section>
  <!-- Main Container End -->