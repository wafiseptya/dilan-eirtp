<div role="main" class="main">       
	<div id="home" class="slider-container rev_slider_wrapper" style="height: 650px;">
		<div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 450, 'disableProgressBar': 'on', 'navigation': {'bullets': {'enable': true, 'direction': 'vertical', 'h_align': 'right', 'v_align': 'center', 'space': 5}, 'arrows': {'enable': false}}}">
			<ul>
				<?php foreach ($header_top as $top): ?>
					<li data-transition="fade">
						<img src="<?php echo base_url('upload/header/'.$top->image) ?>"  
							alt="<?php echo base_url('upload/header/'.$top->description) ?>"
							data-bgposition="center center" 
							data-bgfit="cover" 
							data-bgrepeat="no-repeat"
							class="rev-slidebg">
					</li>
				<?php endforeach; ?>
				</ul>
		</div>
	</div>
	<section class="section-custom-medical" id="dilan_e_irtp">
		<div class="container">
			<div class="row medical-schedules">
				<div class="col-xl-12 bg-color-primary">
					<div class="p-4" style="background-color:#5786bf;color:#ffffff;border-color:#ffffff;border-width:0px;">
						<h1 class="d-flex justify-content-center" data-fontsize="26" data-lineheight="36" style="">
							<img class="size-medium wp-image-869" src="<?php echo base_url('upload/about/'.$about->image) ?>" alt="" width="300" height="91">
						</h1>
						<p class="text-center text-white">
              <?php echo $about->content ?>
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="pt-5 text-center pb-3">
				<h3 class="font-weight-bold">6 Keuntungan Memiliki Sertifikasi IRTP</h3>
			</div>
			<div>
				<div class="row mt-4">
					<?php foreach ($advantages as $advantage): ?>
					<div class="col-lg-4">
						<div class="feature-box feature-box-style-2 appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
							<div class="feature-box-icon" style="min-width: 4.7rem;">
								<span style="width:50px"><img style="color:#03a9f4" src="<?php echo base_url('upload/advantage/'). $advantage->image ?> "> </span>
							</div>
							<div class="feature-box-info">
								<h4 class="font-weight-semibold"><?php echo $advantage->title ?></h4>
								<p><?php echo $advantage->description ?></p>
							</div>	
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col bg-info p-4 m-3 padding">
					<h1 class="d-flex justify-content-center" data-fontsize="26" data-lineheight="36" style="">
						<img src="assets/img/image/1-Daftar-Keamanan-Pangan.png" width="250" height="250" alt="">
					</h1>
					<h2 class="text-center font-weight-semibold">DAFTAR PKP</h2>
					<p class="text-center text-white">Daftar Online Pelatihan Penyuluhan Keamanan Pangan</p>
					<div class="container">
						<div class="row d-flex justify-content-center">
							<a target="_blank" href="https://dilaneirtp.jogjakota.go.id/sistem/apijss.php" class="text-uppercase p-2 border-dark w-100 btn btn-default">Register</a>
						</div>
					</div>
				</div>
				<div class="col bg-info p-4 m-3">
					<h1 class="d-flex justify-content-center" data-fontsize="26" data-lineheight="36" style="">
						<img src="assets/img/image/2-Daftar-OSS.png" width="250" height="250" alt="">
					</h1>
					<h2 class="text-center font-weight-semibold">DAFTAR NIB</h2>
					<p class="text-center text-white">Daftar Nomor Induk Berusaha (NIB) di OSS (Online Single Submission)</p>
					<div class="container">
						<div class="row d-flex justify-content-center">
							<a target="_blank" href="https://www.oss.go.id/oss/" class="text-uppercase p-2 border-dark w-100 btn btn-default">Register</a>
						</div>
					</div>
				</div>
				<div class="col bg-info p-4 m-3">
					<h1 class="d-flex justify-content-center" data-fontsize="26" data-lineheight="36" style="">
						<img src="assets/img/image/3-Daftar-IRTP.png" width="250" height="250" alt="">
					</h1>
					<h2 class="text-center font-weight-semibold">DAFTAR SP PIRT</h2>
					<p class="text-center text-white">Daftar Sertifikasi Produk Pangan Industri Rumah Tangga</p>
					<div class="container">
						<div class="row d-flex justify-content-center">
							<a target="_blank" href="https://dilaneirtp.jogjakota.go.id/sistem/apijss.php" class="text-uppercase p-2 border-dark w-100 btn btn-default">Register</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<a href="https://play.google.com/store/apps/details?id=id.go.jogjakota.jogjasmartservice" target="_blank" aria-label="Banner Android" >			
			<div class="d-flex justify-content-center mt-5 android-bg w-100 rev-slidebag" style="background-image: url('<?php echo base_url('upload/header/'.$header_main->image) ?>');"></div>
		</a>
	</section>
	<section id="petunjuk" class="bg-petunjuk p-5">
		<div class="container">
			<div class="row">
			<div class="col col-md-8 col-12 mt-5" >
				<div style="background-color:#fa6900" class="d-flex justify-content-center pt-3 pb-3">
					<h2 class="another_h2 text-white text-uppercase font-weight-bold">Petunjuk Pendaftaran E-IRTP</h2>
				</div>
				<div class="mt-4 row">
					<ul class="nav nav-tabs padding w-100 nav-pills sort-source mb-4 pb-1" id="myTab" role="tablist" style="border-bottom:  none;">
          <?php 
          $count =1;
          ?>
          <?php foreach ($header_petunjuk as $judul): ?>

            <li class="nav-item col-4 p-0">
						  <a class="nav-link border border-white d-flex justify-content-center padding-petunjuk  <?php echo $count == 1 ? ' active': '' ?>"  data-toggle="pill" href="#<?php echo str_replace(' ', '', $judul->description) ?>" role="tab" aria-controls="home" aria-selected="true"><h4 class="another_h4"><i class="fontawesome-icon fa-calendar-plus fas mr-3" style="font-size:17px;"></i><?php echo $judul->description ?></h4></a>
            </li>
          <?php
          $count++;
          ?>
          <?php endforeach; ?>

					</ul>
				</div>
				
				<div class="tab-content p-0">
        <?php 
        $count =1;
        ?>
        <?php foreach ($header_petunjuk as $img_petunjuk): ?>
					<div class="tab-pane <?php echo $count == 1 ? ' active': '' ?>" id="<?php echo str_replace(' ', '', $img_petunjuk->description) ?>" role="tabpanel" aria-labelledby="home-tab">
						<div class="portfolio-item">
							<div class="portfolio-item">
									<img src="<?php echo base_url('upload/header/'.$img_petunjuk->image) ?>"  
										alt=""
										style="width:100%"
										data-bgposition="center center" 
										data-bgfit="contain"
										data-bgrepeat="no-repeat">
								</div>
						</div>
					</div>
        <?php
        $count++;
        ?>
        <?php endforeach; ?>
				</div>
			</div>
			
			<!--<div class="col col-md-8 col-12 mt-5" >
					<div style="background-color:#fa6900" class="d-flex justify-content-center pt-3 pb-3">
						<h2 class="another_h2 text-white text-uppercase font-weight-bold text-center">Petunjuk Pendaftaran E-IRTP</h2>
					</div>
					<div class="mt-4 row">
						<ul class="nav padding w-100 nav-pills sort-source mb-4 pb-1" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
						  <?php foreach ($header_petunjuk as $judul): ?>
							<li class="nav-item col-4 p-0" data-option-value=".<?php echo str_replace(' ', '', $judul->description) ?>" class="active"><a class="nav-link border border-white d-flex justify-content-center padding-petunjuk active" href="#" ><h4 class="another_h4"><i class="fontawesome-icon fa-calendar-plus fas mr-3" style="font-size:17px;"></i><?php echo $judul->description ?></h4></a></li>
						  <?php endforeach; ?>
						</ul>
						</div>
					<div>
						<div class="row portfolio-list sort-destination" data-sort-id="portfolio">
							<?php foreach ($header_petunjuk as $img_petunjuk): ?>
							<div class="col-md-4 isotope-item <?php echo str_replace(' ', '', $img_petunjuk->description) ?>">
								<div class="portfolio-item">
									<img src="<?php echo base_url('upload/header/'.$img_petunjuk->image) ?>"  
										alt=""
										data-bgposition="center center" 
										data-bgfit="contain"
										data-bgrepeat="no-repeat">
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
			</div> 
			-->
				<div class="col col-md-4 col-12 mt-5">
					<div style="background-color:#fa6900" class="d-flex justify-content-center pt-3 pb-3">
						<h2 class="another_h2 text-white text-uppercase font-weight-bold">Agenda</h2>
					</div>
					<div class="mt-4 p-0">
						<ul class="list-unstyled">
							<?php setlocale(LC_ALL, 'id_ID') ?>
							<?php foreach ($agendas as $a): ?>
								<li>
									<div>
										<h4>
											<a class ="news" href="<?php echo base_url('kegiatan/'.$a->id) ?>"><?php echo $a->title ?> </a>
										</h4>
										<div class="duration">
											<span class="tribe-event-date-start"><?php echo strftime("%d %B %G", strtotime($a->date)) . " jam " . date("H:i", strtotime($a->start_time)) . " - " . date("H:i", strtotime($a->end_time)); ?></span>
										</div>
										<div>
											<hr/>
										</div>
									</div>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="berita">
		<div class="container">
			<div class="row pt-3">
				<div class="col">
					<h2 class="title-heading-left another_h2 font-weight-bold" data-fontsize="21" data-lineheight="22"><i class="fontawesome-icon fa-comment-dots far circle-no" style="font-size:18px;margin-right:9px;color:#0a0a0a; margin-top:100px;"></i>&nbsp;Berita dan Artikel<p></p></h2>				
				</div>
				<div>
					<hr/>
				</div>
			</div>
			<div class="row">
				<?php foreach ($posts as $news): ?>
				<div class="col-md-3">
					<a href="<?php echo base_url('berita/'.$news->id) ?>" class="text-decoration-none">
						<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
							<span class="thumb-info-side-image-wrapper image-post" style="background-image:url('<?php echo base_url('upload/news/'.$news->banner) ?>');overflow: hidden">
							</span>
							<span class="thumb-info-caption">
								<span class="thumb-info-caption-text p-xl">
								<h4 class="font-weight-semibold mb-1"><?php echo $news->title ?></h4>
								<p class="text-3"><?php echo substr($news->content, 0, 80) ?></p>
								</span>
							</span>
						</span>
					</a>
				</div>
				<?php endforeach; ?>	
			</div>
			<div class="row pb-4">
				<div class="col-lg-12 text-center">
					<a class="btn-default btn btn-outline btn-quaternary custom-button text-uppercase font-weight-bold w-20" href="<?php echo base_url('pojok-dilan/') ?>">view more</a>
				</div>
			</div>
		</div>
		<section class="bg-petunjuk">
		<div class="container">
			<div class="row">
				<div class="col mt-5">
					<h2 class="title-heading-left another_h2 font-weight-bold" data-fontsize="21" data-lineheight="22">
						<i class="fontawesome-icon fa-chart-line fas circle-no" style="font-size:18px;margin-right:9px;color:#0a0a0a;"></i> Statistik Permohonan IRTP<p></p>
					</h2>
					<div>
						<hr/>
					</div>
				</div>
				<div class="w-100"></div>
				<div class="col col-md-4 col-12 border border-white mb-5">
					<div class="d-flex justify-content-center mt-3 bg-information">
						<i class="counter-box-icon fontawesome-icon fa-diagnoses fas" style="font-size:70px;"></i>
					</div>
					<div>
						<h2 class="font-weight-bold d-flex justify-content-center mb-0 bg-information">
							<span class="display-counter mt-1 mr-1" data-value="<?php echo $statistik[0]->value ?>" data-direction="up" data-decimals="0">78</span><span class="unit mt-1"> UMKM</span>
						</h2>
					</div>
					<div>
						<p class="font-weight-bold text-center p-information">
							<span> Peserta Pelatihan Penyuluhan Keamanan Pangan Tahun <?php echo $statistik[0]->year ?></span>
						</p>
					</div>
				</div>
				<div class="col col-md-4 col-12 border border-white mb-5">
					<div class="d-flex justify-content-center mt-3 bg-information">
						<i class="counter-box-icon fontawesome-icon fa-file-medical fas" style="font-size:70px;"></i>
					</div>
					<div>
						<h2 class="font-weight-bold d-flex justify-content-center mb-0 bg-information">
							<span class="display-counter mt-1 mr-1" data-value="<?php echo $statistik[1]->value ?>" data-direction="up" data-decimals="0">23</span><span class="unit mt-1"> UMKM</span>
						</h2>
					</div>
					<div>
						<p class="font-weight-bold text-center p-information">
							Permohonan IRTP yang Disetujui Tahun <?php echo $statistik[1]->year ?>
						</p>
					</div>
				</div>
				<div class="col col-md-4 col-12 border border-white mb-5 bg-information">
					<div class="d-flex justify-content-center mt-3">
						<i class="counter-box-icon fontawesome-icon fa-file-signature fas" style="font-size:70px;"></i>
					</div>
					<div>
						<h2 class="font-weight-bold d-flex justify-content-center pb-0 mb-0 bg-information">
							<span class="display-counter mt-1 mr-1" data-value="<?php echo $statistik[2]->value ?>" data-direction="up" data-decimals="0">593</span><span class="unit mt-1"> UMKM</span>
						</h2>
					</div>
					<div>
						<p class="font-weight-bold text-center p-information">
							UMKM di Kota Yogyakarta yang sudah tersertifikasi IRTP
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col col-md-6 col-12 mb-5">
					<div class=" border border-white">
						<div class="row d-flex justify-content-center">
							<div>
								<h4 class="m-4">Jumlah Sertifikat P-IRT Diterbitkan Per Bulan</h4>
							</div>
							<div class="w-100">
								<canvas id="leftChart" class="m-4" style="width:330px"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col col-md-6 col-12 mb-5">
					<div class="border border-white">
						<div class="row d-flex justify-content-center">
							<div>
								<h4 class="m-4">Jumlah IRTP Diberikan Sertifikat Per Bulan</h4>
							</div>
							<div class="w-100">
								<canvas id="rightChart" class="m-4" style="width:330px"></canvas>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</section>
	<section class="section" id="marketplace">
		<div class="container pb-3">
			<div class="row mt-4 mb-4">
				<div class="col">
					<h2 class="font-weight-semibold mb-0 text-center text-uppercase">mitra marketplace</h2>
				</div>
			</div>
			<div class="row mb-5">
				<?php foreach ($mitra_marketplace as $m_m): ?>
				<div class="col">
					<div class="d-flex justify-content-center">
						<a href="<?php echo $m_m->url ?>" target="_blank" aria-label="Program Gandeng Gendong"><img src="<?php echo base_url('upload/mitra/'.$m_m->image); ?>" width="350" height="120" alt=""></a>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="row d-flex justify-content-center">
				<h2 class="font-weight-semibold mb-0 mt-3 text-center text-uppercase">mitra sertifikasi</h2>
			</div>
			<div class="row">
			<?php foreach ($mitra_sertifikasi as $m_s): ?>
				<div class="col d-flex justify-content-center mt-3">
					<a href="<?php echo $m_s->url ?>" target="_blank" aria-label="Program Gandeng Gendong"><img src="<?php echo base_url('upload/mitra/'.$m_s->image); ?>" width="auto" height="120" alt=""></a>
				</div>
			<?php endforeach; ?>
			</div>
		</div>
	</section>
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
</div>