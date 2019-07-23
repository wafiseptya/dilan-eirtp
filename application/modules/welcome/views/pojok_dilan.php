	<div role="main" class="main">
		<section>
			<div class="container mt-5">
				<h2 class="font-weight-bold">Pojok Dilan</h2>
				<div class="row">
					<?php setlocale(LC_ALL, 'id_ID') ?>
					<?php foreach ($posts as $news): ?>
					<div class="col col-md-4 col-12">
						<a href="<?php echo base_url('berita/'.$news->id) ?>" class="text-decoration-none">
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

				<h2 class="font-weight-bold">Berita</h2>
				<div class="row">
					<?php setlocale(LC_ALL, 'id_ID') ?>
					<?php foreach ($berita as $news): ?>
					<div class="col col-md-4 col-12">
						<a href="<?php echo base_url('berita/'.$news->id) ?>" class="text-decoration-none">
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
					<?php endforeach ?>
				</div>

				<h2 class="font-weight-bold">Tips dan Artikel</h2>
				<div class="row">
					<?php setlocale(LC_ALL, 'id_ID') ?>
					<?php foreach ($other as $news): ?>
					<div class="col col-md-4 col-12">
						<a href="<?php echo base_url('berita/'.$news->id) ?>" class="text-decoration-none">
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
					<?php endforeach ?>
				</div>
				<!--<div class="row">
					<div class="col col-md-6 col-12 pr-4">
						<h3 class="font-weight-bold">Berita</h3>
						<div class="container">
							<div class="row mb-5">
								<div class="col-7 pl-0 pr-0">
									<img class="w-100" src="https://integra.web.id/eirtp-public/wp-content/uploads/2019/05/WhatsApp_Image_2019-04-24_at_13.16_.11_.jpeg" height="250px">
								</div>
								<div class="col-5">
									<a href="#"><h4>UMKM di Kota Yogyakarta didorong Miliki Izin P-IRT</h4></a>
									<p class="text-justify">Dinas Kesehatan melalui Pemerintah Kota Yogyakarta menyelenggarakan penyuluhan peningkatan mutu</p>
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
						<h3 class="font-weight-bold">Tips dan Artikel</h3>
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
				</div>-->
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