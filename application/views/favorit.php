

	<div class="blog__single__page">
		<article class="blog__article pt-5">
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-center w-100">
						<h2 class="mb-2 mx-auto">Karya Seni Favorit</h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($art as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("Art/index/".$data->id_art) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->judul_art?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
            </blockquote>
		</article>
	</div>
