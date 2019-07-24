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
		</div>
	</section>
</div>