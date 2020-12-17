
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
        <link rel="stylesheet" href="assets/css/vendor/vendor.min.css" />
        <link rel="stylesheet" href="assets/css/plugins/plugins.min.css" />
        <link rel="stylesheet" href="assets/css/style.min.css">
        <link rel="stylesheet" href="assets/css/custom.css">

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
                                <li>Quem Somos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcrumb Area End-->

        <!-- contact area start -->
        <div class="contact-area mtb-50px">
                <div class="container">
                    <div class="contact-map mb-10">
                        <div id="map"></div>
                    </div>
                    <div class="custom-row-2">
                        <div class="col-lg-4 col-md-5 mb-lm-30px">
                            <div class="contact-info-wrap">
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-call"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="tel://+012 345 678 102">+012 345 678 102</a></p>
                                        <p><a href="tel://+012 345 678 102">+012 345 678 102</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-globe"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p><a href="mailto://urname@email.com">urname@email.com</a></p>
                                        <p><a href="mailto://urwebsitenaem.com">urwebsitenaem.com</a></p>
                                    </div>
                                </div>
                                <div class="single-contact-info">
                                    <div class="contact-icon">
                                        <i class="ion-android-pin"></i>
                                    </div>
                                    <div class="contact-info-dec">
                                        <p>Address goes here,</p>
                                        <p>street, Crossroad 123.</p>
                                    </div>
                                </div>
                                <div class="contact-social">
                                    <h3>Rede Sociais</h3>
                                    <div class="social-info">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="ion-social-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ion-social-youtube"></i></a>
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
                        <div class="col-lg-8 col-md-7">
                            <div class="contact-form">
                                <div class="contact-title mb-30">
                                    <h2>Entre em contato</h2>
                                </div>
                                <form class="contact-form-style" id="contact-form" action="https://live.hasthemes.com/html/5/abelo-preview/abelo/assets/php/mail.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <input name="name" placeholder="Name*" type="text" />
                                        </div>
                                        <div class="col-lg-6">
                                            <input name="email" placeholder="Email*" type="email" />
                                        </div>
                                        <div class="col-lg-12">
                                            <input name="subject" placeholder="Subject*" type="text" />
                                        </div>
                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Your Message*"></textarea>
                                            <button class="submit" type="submit">SEND</button>
                                        </div>
                                    </div>
                                </form>
                                <p class="form-messege"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact area end -->

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
        <script src="assets/js/vendor/vendor.min.js"></script>
        <!-- MAP API -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6iKLVzr34W23jAZDT3HlrElOHfK6IH_w"></script>
        <script src="assets/js/plugins/plugins.min.js"></script>

        <!-- Main Activation JS -->
        <script src="assets/js/main.js"></script>
        <script>
            function init() {
                var mapOptions = {
                    zoom: 11,
                    scrollwheel: false,
                    center: new google.maps.LatLng(40.709896, -73.995481),
                    styles: [
                        {
                            featureType: "water",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#e9e9e9",
                                },
                                {
                                    lightness: 17,
                                },
                            ],
                        },
                        {
                            featureType: "landscape",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#f5f5f5",
                                },
                                {
                                    lightness: 20,
                                },
                            ],
                        },
                        {
                            featureType: "road.highway",
                            elementType: "geometry.fill",
                            stylers: [
                                {
                                    color: "#ffffff",
                                },
                                {
                                    lightness: 17,
                                },
                            ],
                        },
                        {
                            featureType: "road.highway",
                            elementType: "geometry.stroke",
                            stylers: [
                                {
                                    color: "#ffffff",
                                },
                                {
                                    lightness: 29,
                                },
                                {
                                    weight: 0.2,
                                },
                            ],
                        },
                        {
                            featureType: "road.arterial",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#ffffff",
                                },
                                {
                                    lightness: 18,
                                },
                            ],
                        },
                        {
                            featureType: "road.local",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#ffffff",
                                },
                                {
                                    lightness: 16,
                                },
                            ],
                        },
                        {
                            featureType: "poi",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#f5f5f5",
                                },
                                {
                                    lightness: 21,
                                },
                            ],
                        },
                        {
                            featureType: "poi.park",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#dedede",
                                },
                                {
                                    lightness: 21,
                                },
                            ],
                        },
                        {
                            elementType: "labels.text.stroke",
                            stylers: [
                                {
                                    visibility: "on",
                                },
                                {
                                    color: "#ffffff",
                                },
                                {
                                    lightness: 16,
                                },
                            ],
                        },
                        {
                            elementType: "labels.text.fill",
                            stylers: [
                                {
                                    saturation: 36,
                                },
                                {
                                    color: "#333333",
                                },
                                {
                                    lightness: 40,
                                },
                            ],
                        },
                        {
                            elementType: "labels.icon",
                            stylers: [
                                {
                                    visibility: "off",
                                },
                            ],
                        },
                        {
                            featureType: "transit",
                            elementType: "geometry",
                            stylers: [
                                {
                                    color: "#f2f2f2",
                                },
                                {
                                    lightness: 19,
                                },
                            ],
                        },
                        {
                            featureType: "administrative",
                            elementType: "geometry.fill",
                            stylers: [
                                {
                                    color: "#fefefe",
                                },
                                {
                                    lightness: 20,
                                },
                            ],
                        },
                        {
                            featureType: "administrative",
                            elementType: "geometry.stroke",
                            stylers: [
                                {
                                    color: "#fefefe",
                                },
                                {
                                    lightness: 17,
                                },
                                {
                                    weight: 1.2,
                                },
                            ],
                        },
                    ],
                };
                var mapElement = document.getElementById("map");
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(40.709896, -73.995481),
                    map: map,
                    icon: "assets/images/icons/2.png",
                    animation: google.maps.Animation.BOUNCE,
                    title: "Snazzy!",
                });
            }
            google.maps.event.addDomListener(window, "load", init);
        </script>

    </body>
</html>
