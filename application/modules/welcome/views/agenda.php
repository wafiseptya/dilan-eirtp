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
</div>