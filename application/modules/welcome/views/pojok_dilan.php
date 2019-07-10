	<div role="main" class="main">
		<section>
			<div class="container mt-5">
				<h2 class="font-weight-bold">Pojok Dilan</h2>
				<div class="row">
					<?php setlocale(LC_ALL, 'id_ID') ?>
					<?php foreach ($posts as $news): ?>
					<div class="col col-md-4 col-12">
						<a href="#" class="text-decoration-none">
							<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
								<span class="thumb-info-side-image-wrapper w-100">
									<span class="thumb-info-side-image-wrapper image-post w-100" style="background-image:url('<?php echo base_url('upload/news/'.$news->banner) ?>');overflow: hidden">
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text p-xl">
										<h4 class="font-weight-semibold mb-1 text-center"><?php echo $news->title ?></h4>
										<p class="text-2 text-center"><?php echo strftime("%d %B %Y", strtotime($news->created_at)); ?></p>
									</span>
								</span>
							</span>
						</a>
					</div>
					<?php endforeach; ?>	
				</div>
				<div class="row">
					<div class="col col-md-4 col-12">
						<a href="#" class="text-decoration-none">
							<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
								<span class="thumb-info-side-image-wrapper">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg">
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text p-xl">
										<h4 class="font-weight-semibold mb-1 text-center">Judul Lorem ipsum</h4>
										<p class="text-2 text-center">Tanggal</p>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col col-md-4 col-12">
						<a href="#" class="text-decoration-none">
							<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
								<span class="thumb-info-side-image-wrapper ">
									<img src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg">
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text p-xl">
										<h4 class="font-weight-semibold mb-1 text-center">Judul Lorem ipsum Judul Lorem ipsum Judul Lorem ipsum Judul Lorem ipsum </h4>
										<p class="text-2 text-center">Tanggal</p>
									</span>
								</span>
							</span>
						</a>
					</div>
					<div class="col col-md-4 col-12">
						<a href="#" class="text-decoration-none">
							<span class="thumb-info thumb-info-side-image thumb-info-side-image-custom thumb-info-no-zoom thumb-info-no-zoom thumb-info-side-image-custom-highlight">
								<span class="thumb-info-side-image-wrapper">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg">
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text p-xl">
										<h4 class="font-weight-semibold mb-1 text-center">Judul Lorem ipsum</h4>
										<p class="text-2 text-center">Tanggal</p>
									</span>
								</span>
							</span>
						</a>
					</div>
				</div>
				<div class="row">
					<div class="col col-md-6 col-12 pr-4">
						<h2>Berita</h2>
						<div class="container">
							<div class="row mb-5">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col col-md-6 col-12">
						<h2>Tips dan Artikel</h2>
						<div class="container">
							<div class="row mb-5">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p>Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
								</div>
								<div class="col-12 border-top border-bottom mb-3 mt-3">
									<div class="row">
										<div class="col-8">
											By <span>writer</span>  |  <span> date create </span>
										</div>
										<div class="col-4 text-right">
											Read more
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	</div>
	</section>
	<footer id="footer" class="m-0 bg-footer">
		<div class="container">
			<div class="row pt-5 pb-3">
				<div class="col col-md-4 col-12 mt-3">
					<h4 class="font-weight-bold">DINAS KESEHATAN KOTA YOGYAKARTA</h4>
					<div class="mt-3">
						<p class="text-white">Jalan Kenari No.56 Kota Yogyakarta (Komplek Balaikota Yogyakarta) Kodepos 55165</p>
					</div>
					<div>
						<p class="mb-0 text-white">Telp. (0274) 515869</p>
					</div>
					<div>
						<p class="mb-0 text-white">Fax. (0274) 515868 </p>
					</div>
					<div>
						<p class="mb-0 text-white">WhatsApp. 0-823-1404-0407</p>
					</div>
					<div>
						<p class="mb-0 text-white">Email: regulasi.dinkesyk@gmail.com</p>
					</div>
				</div>
				<div class="col col-md-4 col-12 mt-3">
					<h4 class="font-weight-bold">PETA LOKASI</h4>
					<div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.9042544645213!2d110.38823011415445!3d-7.799960879585036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a577caaa817ed%3A0x1e4bc5c6b6a26619!2sDinas+Kesehatan+Kota+Yogyakarta!5e0!3m2!1sid!2sid!4v1561953491673!5m2!1sid!2sid" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col col-md-4 col-12 mt-3">
					<h4 class="font-weight-bold">DOWNLOAD APLKASI JSS</h4>
					<div>
						<a href="https://play.google.com/store/apps/details?id=id.go.jogjakota.jogjasmartservice" target="_blank" >
							<img src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/en_badge_web_generic-e1558684699870.png" width="350" height="110" alt="Play Store">
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