<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<!-- Basic -->
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>DILAN E-IRTP | Digitalisasi Layanan E-IRTP &#8211; Dinas Kesehatan Kota Yogyakarta</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/animate/animate.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/simple-line-icons/css/simple-line-icons.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.carousel.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/owl.carousel/assets/owl.theme.default.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/magnific-popup/magnific-popup.min.css');?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/theme.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-elements.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-blog.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/theme-shop.css');?>">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/settings.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/layers.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/vendor/rs-plugin/css/navigation.css');?>">
		
		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/demos/demo-medical.css');?>">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/skins/skin-medical.css');?>"> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url('assets/css/custom.css');?>">

		<!-- Head Libs -->
        <script src="<?php echo base_url('assets/vendor/modernizr/modernizr.min.js');?>"></script>
        
        

</head>
<body>

<div id="container">
	<div class="body">

        <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
            <div class="header-body border-top-0">
                <div class="header-top header-top-default header-top-borders border-bottom-0">
                    <div class="container h-100">
                        <div class="header-row h-100">
							<div class="container">
								<div class="row">
									<div class="col-7 pl-0">
										<div class="header-column justify-content-start">
											<div class="header-row">
												<nav class="header-nav-top">
													<ul class="nav nav-pills">
														<li class="nav-item nav-item-borders py-1 d-none d-sm-inline-flex">
															<span class="pl-0">Jl. Kenari No.56 Kota Yogyakarta 55165 | Telp. (0274) 515869 Fax. (0274) 515868</span>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
									<div class="col-5 pr-0">
										<div class="header-column justify-content-end">
											<div class="header-row">
												<nav class="header-nav-top">
													<ul class="nav nav-pills">
														<li class="nav-item nav-item-borders py-1 d-none d-sm-inline-flex">
															<a href="#footer">Kontak</a>
														</li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>	
                        </div>
                    </div>
                </div>
                <div class="header-container container">
                    <div class="header-row">
                        <div class="header-column">
                            <div class="header-row">
                                <div class="header-logo">
                                    <a href="/">
                                        <img src="<?php echo base_url('assets');?>/img/image/logo-dilan-1x.png" height="50" alt="DILAN E-IRTP | Digitalisasi Layanan E-IRTP Logo" retina_logo_url="" class="fusion-sticky-logo">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="header-column justify-content-end">
                            <div class="header-row">
                                <div class="header-nav order-2 order-lg-1">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse" id="nav-bar">
                                            <ul class="nav nav-pills" id="mainNav">
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link  <?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? 'active': '' ?>" href="<?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? '#home' : base_url() ?>">
                                                        BERANDA
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link" href="<?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? '#dilan_e_irtp' : base_url() ?>">
                                                        DILAN E-IRTP
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link" href="<?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? '#petunjuk' : base_url() ?>">
                                                        PETUNJUK
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link" href="<?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? '#berita' : base_url() ?>">
                                                        BERITA
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link" href="<?php echo $this->uri->segment(1) != 'faq' && $this->uri->segment(1) != 'pojok-dilan' ? '#marketplace' : base_url() ?>">
                                                        MARKETPLACE
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link  <?php echo $this->uri->segment(1) == 'faq' ? 'active': '' ?>" href="<?php echo base_url('faq') ?>">
                                                        FAQ
                                                    </a>
                                                </li>
                                                <li class="dropdown-full-color dropdown-secondary">
                                                    <a class="nav-link  <?php echo $this->uri->segment(1) == 'pojok-dilan' ? 'active': '' ?>" href="<?php echo base_url('pojok-dilan') ?>">
                                                        POJOK DILAN
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- start of content -->

        <?php
        if (isset($content)) {
            $this->load->view($content);
        }
        ?>

        <!-- end of content -->
        
    </div>
</div>
<!-- float button -->

<footer id="footer" class="m-0 bg-footer">
    <div class="container">
        <div class="row pt-5 pb-3">
            <div class="col col-md-4 col-12 mt-3">
                <h4 class="font-weight-bold">DINAS KESEHATAN KOTA YOGYAKARTA</h4>
                <div class="mt-3">
                    <p class="text-white"><?php echo $footer->address ?></p>
                </div>
                <div>
                    <p class="mb-0 text-white">Telp. <?php echo $footer->telp ?></p>
                </div>
                <div>
                    <p class="mb-0 text-white">Fax. <?php echo $footer->fax ?> </p>
                </div>
                <div>
                    <p class="mb-0 text-white">WhatsApp. <?php echo $footer->whatsapp ?></p>
                </div>
                <div>
                    <p class="mb-0 text-white">Email: <?php echo $footer->email ?></p>
                </div>
            </div>
            <div class="col col-md-4 col-12 mt-3">
                <h4 class="font-weight-bold">PETA LOKASI</h4>
                <div>
                    <?php echo $footer->location ?>
                </div>
            </div>
            <div class="col col-md-4 col-12 mt-3">
                <h4 class="font-weight-bold">DOWNLOAD APLKASI JSS</h4>
                <div>
                    <a href="<?php echo $footer->apps ?>" target="_blank" >
                        <img src="<?php echo base_url('assets');?>/img/image/play_store.png"
                            alt=""
                            style="width:100%"
                            data-bgposition="center center" 
                            data-bgfit="contain"
                            data-bgrepeat="no-repeat">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright pt-3 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-0">
                    <p>Copyright 2019 IRTP Online - Dinas Kesehatan Kota Yogyakarta | All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>	
<div>
    <a href="https://wa.me/6282314040407?text=Kepada%20Pengelola%20Web%20Dilan%20EIRTP%20Pemerintah%20Kota%20Yogyakarta.%20Kami%20ingin%20mendapatkan%20informasi%20lebih%20lanjut%20terkait%20Pengurusan%20Sertifikat%20IRTP." class="float" target="_blank">
    <button class="button-wa p-2 pl-3 pr-3"><img src="<?php echo base_url('assets');?>/img/image/whatsapp(32x32).png" width="20"/><span class="pl-2 text-dark">Hubungi kami dengan WhatsApp</span></button></a>
</div>

<!-- Vendor -->
<script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.appear/jquery.appear.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.easing/jquery.easing.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.cookie/jquery.cookie.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/popper/umd/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/common/common.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.validation/jquery.validate.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.gmap/jquery.gmap.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/jquery.lazyload/jquery.lazyload.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/isotope/jquery.isotope.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/owl.carousel/owl.carousel.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/magnific-popup/jquery.magnific-popup.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/vide/jquery.vide.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/vivus/vivus.min.js');?>"></script>

<!-- Theme Base, Components and Settings -->
<script src="<?php echo base_url('assets/js/theme.js');?>"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.tools.min.js');?>"></script>
<script src="<?php echo base_url('assets/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js');?>"></script>

<!-- Current Page Vendor and Views -->
<script src="<?php echo base_url('assets/');?>js/views/view.contact.js"></script>

<!-- Demo -->
<script src="<?php echo base_url('assets/');?>js/demos/demo-medical.js"></script>

<!-- Theme Initialization Files -->
<script src="<?php echo base_url('assets/');?>js/theme.init.js"></script>

<!-- Grafik -->
<script type="text/javascript" src="<?php echo base_url('assets/chartjs/Chart.js')?>"></script>

<!-- Theme Custom -->
<script src="<?php echo base_url('assets/');?>js/scroll.js"></script>
<script src="<?php echo base_url('assets/');?>js/custom.js"></script>

</body>
</html>