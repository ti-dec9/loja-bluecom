
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
<head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Loja Bluecom</title>
        <meta name="robots" content="noindex, follow" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Favicon -->
        <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon/favicon.png" /> -->
        <!-- Google Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Muli:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" type="text/css" media="all">

        <!-- CSS
  ============================================ -->

            <!-- Vendor CSS (Bootstrap & Icon Font) -->
       <!--   <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/vendor/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/vendor/linearicon.css">
        <link rel="stylesheet" href="assets/css/vendor/sofiaPro.css">
        <link rel="stylesheet" href="assets/css/vendor/font-awesome.min.css"> -->

            <!-- Plugins CSS (All Plugins Files) -->
        <!--  <link rel="stylesheet" href="assets/css/plugins/animate.css">
        <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
        <link rel="stylesheet" href="assets/css/plugins/slick.css"> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">

        <!-- Main Style CSS -->
        <!-- <link rel="stylesheet" href="assets/css/style.css" /> -->
    </head>

    <body>
        
    <?php $this->load->view('includes/header-desktop'); ?>

    <?php $this->load->view('includes/header-mobile'); ?>

    <div class="offcanvas-overlay"></div>

    <!-- Breadcrumb Area Start -->
        <div class="breadcrumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-content">
                            <ul class="nav">
                                <li><a href="index.html">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Breadcrumb Area End-->
            <!-- Shop Category Area End -->
            <div class="shop-category-area mt-30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Shop Top Area Start -->
                            <div class="shop-top-bar d-flex">
                                <!-- Left Side start -->
                                <div class="shop-tab nav d-flex">
                                    <a class="active" href="#shop-1" data-toggle="tab">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#shop-2" data-toggle="tab">
                                        <i class="fa fa-list"></i>
                                    </a>
                                    <!-- <p>Mostrando 13 Produtos.</p> -->
                                </div>
                                <!-- Left Side End -->
                                <!-- Right Side Start -->
                                <div class="select-shoing-wrap d-flex">
                                    <div class="shot-product">
                                        <p>&nbsp;</p>
                                    </div>
                                    <div class="shop-select">
                                        <select>
                                            <option value="" selected disabled>Filtrar por</option>
                                            <option value="">A a Z</option>
                                            <optgroup label="Categorias">
                                                <option>Wirelless</option>
                                                <option>Segurança</option>
                                                <option>Fibra Óptica</option>
                                                <option>Ferramentas</option>
                                                <option>Network</option>
                                                <option>Rack & Acessórios</a></option>
                                                <option>Marketing</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <!-- Right Side End -->
                            </div>
                            <!-- Shop Top Area End -->

                            <!-- Shop Bottom Area Start -->
                            <div class="shop-bottom-area mt-35">
                                <!-- Shop Tab Content Start -->
                                <div class="tab-content jump">
                                    <!-- Tab One Start -->
                                    <div id="shop-1" class="tab-pane active">
                                        <div class="row m-0">
                                            <?php
                                                if (empty($products)) :
                                            ?>
                                            <h3>Nenhum item encontrado</h3>
                                            <?php
                                                else :                                                    
                                                    $obj = new ArrayIterator($products);
                                                    while($obj->valid()) : 
                                            ?>                                            
                                            <div class="mb-30px col-md-4 col-lg-3 col-sm-6  p-0">
                                                <div class="slider-single-item">
                                                    <!-- Single Item -->
                                                    <article class="list-product p-0 text-center">
                                                        <div class="product-inner">
                                                            <div class="img-block">
                                                                <a href="#" class="thumbnail">
                                                                    <img class="first-img" src="http://localhost:8080/sgi-bluecom/assets/img/products/<?php echo $obj->current()->image; ?>" style="widht: 250px; height: 250px; object-fit: cover;" alt="" />
                                                                </a>
                                                               <!--  <div class="add-to-link">
                                                                    <ul>
                                                                        <li>
                                                                            <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                                                <i class="lnr lnr-magnifier"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div> -->
                                                            </div>
                                                            <!-- <ul class="product-flag">
                                                                <li class="new">-12%</li>
                                                            </ul> -->
                                                            <div class="product-decs">
                                                                <a class="inner-link" href="#"><span><?php echo $obj->current()->title; ?></span></a>
                                                                <h2><a href="#" class="product-link"><?php echo $obj->current()->name_category; ?></a></h2>
                                                                <!-- <div class="pricing-meta">
                                                                    <ul>
                                                                        <li class="old-price">$23.90</li>
                                                                        <li class="current-price">$21.51</li>
                                                                    </ul>
                                                                </div> -->
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#" class="add-to-curt" title="Solicitar orçamento">Solicitar orçamento</a>
                                                            </div>
                                                        </div>
                                                    </article>
                                                    <!-- Single Item -->
                                                </div>
                                            </div>
                                            <?php
                                                        $obj->next();
                                                    endwhile;
                                                endif;
                                            ?>
                                        </div>
                                    </div>
                                    <!-- Tab One End -->

                                    <!-- Tab Two Start -->
                                    <div id="shop-2" class="tab-pane">
                                        <div class="shop-list-wrap mb-30px scroll-zoom">
                                            <div class="slider-single-item">
                                                <div class="row list-product m-0px">
                                                <?php
                                                if (empty($products)) :
                                            ?>
                                            <h3>Nenhum item encontrado</h3>
                                            <?php
                                                else :                                                    
                                                    $obj = new ArrayIterator($products);
                                                    while($obj->valid()) : 
                                            ?> 
                                                    <div class="col-md-12 padding-0px product-inner">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 p-0">
                                                                <div class="left-img">
                                                                    <div class="img-block">
                                                                        <a href="single-product.html" class="thumbnail">
                                                                            <img class="first-img" src="http://localhost:8080/sgi-bluecom/assets/img/products/<?php echo $obj->current()->image; ?>" alt="" />
                                                                            <!-- <img class="second-img" src="assets/images/product-image/8.jpg" alt="" /> -->
                                                                        </a>
                                                                        <!-- <ul class="product-flag">
                                                                            <li class="new">-10%</li>
                                                                        </ul> -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 p-0">
                                                                <div class="product-desc-wrap">
                                                                    <div class="product-decs">
                                                                        <h2><a href="#" class="product-link"><?php echo $obj->current()->title; ?></a></h2>
                                                                        <a class="inner-link" href="#"><span><?php echo $obj->current()->name_category; ?></span></a>
                                                                        <div class="product-intro-info">
                                                                            <p><?php echo mb_strimwidth($obj->current()->description, 0, 65, "..."); ?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="box-inner d-flex">
                                                                        <div class="align-self-center">
                                                                            <!-- <div class="in-stock">Availability: <span>299 In Stock</span></div> -->
                                                                            <!-- <div class="pricing-meta">
                                                                                <ul>
                                                                                    <li class="old-price">$21.90</li>
                                                                                    <li class="current-price">$18.50</li>
                                                                                </ul>
                                                                            </div> -->
                                                                            <div class="cart-btn">
                                                                                <a href="#" class="add-to-curt" title="Solicitar orçamento">Solicitar orçamento</a>
                                                                            </div>
                                                                            <div class="add-to-link">
                                                                                <ul>
                                                                                    <!-- <li>
                                                                                        <a class="quick_view" href="#" data-link-action="quickview" title="Quick view" data-toggle="modal" data-target="#exampleModal">
                                                                                            <i class="lnr lnr-magnifier"></i>
                                                                                        </a>
                                                                                    </li> -->
                                                                                    <!-- <li>
                                                                                        <a href="wishlist.html" title="Add to Wishlist"><i class="lnr lnr-heart"></i></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a href="compare.html" title="Add to compare"><i class="lnr lnr-sync"></i></a>
                                                                                    </li> -->
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        $obj->next();
                                                    endwhile;
                                                endif;
                                            ?>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <!-- Tab Two End -->
                                </div>
                                <!-- Shop Tab Content End -->
                                <!--  Pagination Area Start -->
                                <div class="pro-pagination-style text-center mtb-50px">
                                    <ul>
                                        <li>
                                            <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                        </li>
                                        <li><a class="active" href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li>
                                            <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <!--  Pagination Area End -->
                            </div>
                            <!-- Shop Bottom Area End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shop Category Area End -->

        <?php $this->load->view('includes/footer'); ?>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12 mb-lm-100px mb-sm-30px">
                                <div class="quickview-wrapper">
                                     <!-- slider -->
                                      <div class="gallery-top">
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/8.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/15.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/19.jpg" alt="">
                                          </div>
                                      </div>
                                      <div class=" gallery-thumbs">
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/8.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/14.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/15.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/11.jpg" alt="">
                                          </div>
                                          <div class="single-slide"> 
                                                <img class="img-responsive m-auto" src="assets/images/product-image/19.jpg" alt="">
                                          </div>
                                      </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="product-details-content quickview-content">
                                    <h2>Originals Kaval Windbr</h2>
                                    <p class="reference">Reference:<span> demo_17</span></p>
                                    <div class="pro-details-rating-wrap">
                                        <div class="rating-product">
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                            <i class="ion-android-star"></i>
                                        </div>
                                        <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                    </div>
                                    <div class="pricing-meta">
                                        <ul>
                                            <li class="old-price not-cut">€18.90</li>
                                        </ul>
                                    </div>
                                    <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                    <div class="pro-details-size-color">
                                        <div class="pro-details-color-wrap">
                                            <span>Color</span>
                                            <div class="pro-details-color-content">
                                                <ul>
                                                    <li class="blue"></li>
                                                    <li class="maroon active"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-details-quality">
                                        <div class="cart-plus-minus">
                                            <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                        </div>
                                        <div class="pro-details-cart btn-hover">
                                            <a href="#"> + Solicitar orçamento</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-wish-com">
                                        <div class="pro-details-wishlist">
                                            <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to wishlist</a>
                                        </div>
                                        <div class="pro-details-compare">
                                            <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                        </div>
                                    </div>
                                    <div class="pro-details-social-info">
                                        <span>Share</span>
                                        <div class="social-info">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="ion-social-facebook"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-twitter"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-google"></i></a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ion-social-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        <!-- JS
============================================ -->

            <!-- Vendors JS -->
        <!-- <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
        <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
        <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
        <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script> -->

            <!-- Plugins JS -->
         <!-- <script src="assets/js/plugins/jquery-ui.min.js"></script>
        <script src="assets/js/plugins/slick.js"></script>
        <script src="assets/js/plugins/countdown.js"></script>
        <script src="assets/js/plugins/scrollup.js"></script>
        <script src="assets/js/plugins/elevateZoom.js"></script> -->

        <!-- Use the minified version files listed below for better performance and remove the files listed above -->
        <script src="<?php echo base_url(); ?>assets/js/vendor/vendor.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    </body>
</html>
