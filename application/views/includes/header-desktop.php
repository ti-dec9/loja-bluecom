    <!-- Header Section Start From Here -->
    <header class="header-wrapper">
        <!-- Header Nav Start -->
        <div class="header-nav">
            <div class="container">
                <div class="header-nav-wrapper d-md-flex d-sm-flex d-xl-flex d-lg-flex justify-content-between">
                    <div class="header-static-nav">
                        <a href="mailto:contato@bluecom.com.br">contato@bluecom.com.br</a>
                    </div>
                    <div class="header-menu-nav">
                        <ul class="menu-nav">
                            <!-- <li>
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Account <i class="ion-ios-arrow-down"></i></button>

                                    <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton">
                                        <li><a href="my-account.html">My account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="login.html">Sign in</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">USD $ <i class="ion-ios-arrow-down"></i></button>

                                    <ul class="dropdown-menu animation slideDownIn" aria-labelledby="dropdownMenuButton-2">
                                        <li><a href="#">EUR €</a></li>
                                        <li><a href="#">USD $</a></li>
                                    </ul>
                                </div>
                            </li> -->
                            <li class="pr-0">
                                <div class="dropdown">
                                    <button type="button" id="dropdownMenuButton-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fab fa-whatsapp"></i> (11) 99142-8286 
                                    </button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-top bg-white ptb-30px d-lg-block d-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 d-flex">
                        <div class="logo align-self-center">
                            <a href="#"><img class="img-responsive" src="<?php echo base_url(); ?>assets/images/logo/logo-bluecom.png" alt="logo.jpg" /></a>
                        </div>
                    </div>
                    <div class="col-md-4 align-self-center justify-content-end">
                        <div class="header-right-element d-flex">
                            <div class="search-element media-body mr-20px">
                                <form class="d-flex" action="#">
                                    <input type="text" placeholder="O que você está buscando?" />
                                    <button>Pesquisar</button>
                                </form>
                            </div>
                            <!--Cart info Start --
                            <div class="header-tools d-flex">
                                <div class="cart-info d-flex align-self-center">
                                    <a href="#offcanvas-wishlist" class="heart offcanvas-toggle"><i class="lnr lnr-heart"></i><span>Wishlist</span></a>
                                    <a href="#offcanvas-cart" class="bag offcanvas-toggle"><i class="lnr lnr-cart"></i><span>My Cart</span></a>
                                </div>
                            </div>-->
                        </div>
                        <!--Cart info End -->
                    </div>
                    <div class="col-md-6 align-self-center justify-content-end">
                        <div class="brand-area">
                            <div class="container">
                                <div class="brand-slider brand-slider-header">
                                    <div class="brand-slider-item" style="padding-right: 15px;">
                                        <a href="#"><img class=" img-responsive" src="http://www.bluecom.com.br/lojabluecom/storage/2018/04/logo_vyper.png" alt="" /></a>
                                    </div>
                                    <div class="brand-slider-item" style="padding-right: 15px;">
                                        <a href="#"><img class=" img-responsive" src="http://www.bluecom.com.br/lojabluecom/storage/2018/04/logo_lan.png" alt="" /></a>
                                    </div>
                                    <div class="brand-slider-item" style="padding-right: 15px;">
                                        <a href="#"><img class=" img-responsive" src="http://www.bluecom.com.br/lojabluecom/storage/2018/04/logo_master.png" alt="" /></a>
                                    </div>
                                    <div class="brand-slider-item" style="padding-right: 15px;">
                                        <a href="#"><img class=" img-responsive" src="http://www.bluecom.com.br/lojabluecom/storage/2018/04/logo_smart.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Nav End -->
        <div class="header-menu bg-white sticky-nav d-lg-block d-none padding-0px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="header-menu-vertical">
                            <h4 class="menu-title">Marcas</h4>
                            <ul class="menu-content display-none">
                                <li class="menu-item"><a href="<?php echo base_url(); ?>marca/transcend">Transcend</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>marca/lan-expert">Lan Expert</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>marca/cabo-hercules"> Cabo Hérculos</a></li>
                                <li class="menu-item"><a href="<?php echo base_url(); ?>marca/gts-hard-soft"> GTS Hard & Soft</a></li>
                            </ul>
                            <!-- menu content -->
                        </div>
                        <!-- header menu vertical -->
                    </div>
                    <div class="col-lg-9">
                        <div class="header-horizontal-menu">
                            <ul class="menu-content">
                                <li class="active menu-dropdown"><a href="<?php echo base_url(); ?>">Home</a></li>
                                <li><a href="#">Quem Somos</a></li>
                                <li class="menu-dropdown">
                                    <a href="<?php echo base_url(); ?>shop">Produtos <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="main-sub-menu">
                                        <li class="menu-dropdown position-static">
                                            <a href="#">Cabeamento <i class="ion-ios-arrow-right"></i></a>
                                            <ul class="main-sub-menu main-sub-menu-2">
                                                <li><a href="<?php echo base_url(); ?>shop">Cabos Lan</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Caixa de superfícies</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Capa para conectores</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Conectores</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Descontinuado</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Espelho</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Patch Cords</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Patch Panels</a></li>
                                                <li><a href="<?php echo base_url(); ?>shop">Tomadas Montadas</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo base_url(); ?>shop">Ferramentas</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop">Fibra Ótica</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop">Segurança</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop">Racks & Acessórios</a></li>
                                        <li><a href="<?php echo base_url(); ?>shop">Wirelles</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- header menu -->
    </header>
    <!-- Header Section End Here -->