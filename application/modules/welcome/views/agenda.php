	<div role="main" class="main">
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col-8">
						<div class="bg">
							<div class="text_color font-weight-bold">
								<h2 class="mb-0 text_color font-weight-bold mb-0"><?php echo $agenda->title ?> </h2>
								<?php setlocale(LC_ALL, 'id_ID') ?>
								<span><?php echo strftime("%d %B", strtotime($agenda->date)) . " jam " . date("H:i", strtotime($agenda->start_time)) . " - " . date("H:i", strtotime($agenda->end_time)); ?></span>
							</div>
						</div>
						<div class="mt-5">
							<p><?php echo $agenda->title ?> </p>
							<div class="mt-5">
								<a href="#"><span class="bg-kalender text-uppercase mt-">+ kalender google</span></a>
								<a href="#"><span class="bg-kalender text-uppercase">+ ekspor ical</span></a>
							</div>
						</div>
					</div>
					<div class="col-4">
						<div class="sub_bg mb-3 text-white">
							<h4 class="mb-0 text-white font-weight-bold">Detail</h4>
						</div>
						<div>
							<span class="font-weight-bold">Tanggal :</span> <p><?php echo strftime("%d %B", strtotime($agenda->date)) ?></p>
							<hr class="border_bottom"/>
						</div>
						<div>
							<span class="font-weight-bold">Waktu :</span> <p><?php echo date("H:i", strtotime($agenda->start_time)) . " - " . date("H:i", strtotime($agenda->end_time)); ?> </p>
							<hr class="border_bottom"/>
						</div>
						<div>
							<span class="font-weight-bold">Event Category :</span>
							<p><?php echo $agenda->category ?> </p>
							<hr class="border_bottom"/>
						</div>
						<div class="sub_bg mb-3">
							<h4 class="mb-0 text-white font-weight-bold">Venue</h4>
						</div> 
						<div>
							<?php echo $agenda->venue ?>
							<hr class="border_bottom"/>
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