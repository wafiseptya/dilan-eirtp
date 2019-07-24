<div role="main" class="main">
	<section class="section">
		<div class="container">
			<h4 class="news_style">Frequently Asked Question</h4>
			<div class="row">
				<div class="col">
					<div id="accordion">
						<?php foreach ($faq as $faq): ?>
						<div class="card">
							<div class="card-header" id="<?php echo $faq->id ?>">
								<h5 class="mb-0">
									<button class="btn" data-toggle="collapse" data-target="#collapse<?php echo $faq->id ?>" aria-expanded="false" aria-controls="collapse<?php echo $faq->id ?>">
									<i class="fas fa-plus-circle" style="font-size:1.25em;color:#008fe2;"></i><span class="pl-3 text-dark"><?php echo $faq->title ?></span>
									</button>
								</h5>
							</div>
							<div id="collapse<?php echo $faq->id ?>" class="collapse" aria-labelledby="heading<?php echo $faq->id ?>" data-parent="#accordion">
							<div class="card-body text-dark ml-4">
								<?php echo $faq->content ?>
							</div>
						</div>
					</div>
					<?php endforeach ?>
			</div>
		</div>
	</section>
</div>