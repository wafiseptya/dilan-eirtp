	<div role="main" class="main">
		<section class="section">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-10 col-12">
						<img class="w-100" src="<?php echo base_url('upload/news/'.$news->banner) ?>" />
						<div>
							<h2 class="text-center font-weight-bold mt-5"><?php echo $news->title ?></h2>
							<span class="text-justify"><?php echo $news->content ?></span>
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