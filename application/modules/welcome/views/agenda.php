	<div role="main" class="main">
		<section class="section">
			<div class="container">
				<div class="row">
					<div class="col col-lg-8 col-12">
						<div class="bg">
							<div class="text_color font-weight-bold">
								<h2 class="mb-0 text_color font-weight-bold mb-0"><?php echo $agenda->title ?> </h2>
								<?php setlocale(LC_ALL, 'id_ID') ?>
								<span><?php echo strftime("%d %B %G", strtotime($agenda->date)) . " jam " . date("H:i", strtotime($agenda->start_time)) . " - " . date("H:i", strtotime($agenda->end_time)); ?></span>
							</div>
						</div>
						<div class="mt-5">
							<p><?php echo $agenda->title ?> </p>
						</div>
					</div>
					<div class="col col-lg-4 col-12">
						<div class="sub_bg mb-3 text-white">
							<h4 class="mb-0 text-white font-weight-bold">Detail</h4>
						</div>
						<div>
							<span class="font-weight-bold">Tanggal :</span> <p><?php echo strftime("%d %B %G", strtotime($agenda->date)) ?></p>
							<hr class="border_bottom"/>
						</div>
						<div>
							<span class="font-weight-bold">Waktu :</span> <p><?php echo date("H:i", strtotime($agenda->start_time)) . " - " . date("H:i", strtotime($agenda->end_time)); ?> </p>
							<hr class="border_bottom"/>
						</div>
						<div>
							<span class="font-weight-bold">Kategori :</span>
							<p><?php echo $agenda->category ?> </p>
							<hr class="border_bottom"/>
						</div>
						<div class="sub_bg mb-3">
							<h4 class="mb-0 text-white font-weight-bold">Lokasi</h4>
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