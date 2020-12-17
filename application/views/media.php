
	<!-- Blog Page -->
	<div class="blog__single__page">
		<article class="blog__article">
			<blockquote class="shadow bg-white">
			<?php foreach($media as $data){?>
			<h2 class="text-center"><?= $data->nama_media ?></h2>
				<div class="blog__header">
					<div class="blog__metas">
						<!-- <div class="blog__meta">1975</div> -->
					</div>
				</div>
				<p class="text-center"><?= $data->desk_media ?></p>

			<?php } ?>
			</blockquote>
			<div class="container">
				<div class="row">
					<div class="text-left">
						<h2>Artikel Terkait</h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($artikel as $data){?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("Artikel/index/".$data->id_artikel) ?>">
							<div class="blog__item  set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
								</div>
							</div>
							<h6><?= $data->judul ?></h6>
							<div class="blog__date text-dark"><?= $data->nama_galeri?></div>
						</a>
					</div>
				<?php } ?>
				</div>
			<div class="text-left">
				<h2>Karya Seni Terkait</h2>
			</div>
			<hr class="w-100">
			<div class="blog__slider pt-2">
			<?php foreach($art as $data){?>
				<div class="blog__slider__item">
					<a href="<?= base_url("Art/index/".$data->id_art) ?>"><img src="<?= base_url().$data->gambar ?>" alt="" title="<?= $data->judul_art ?>"></a>
				</div>
			<?php } ?>
			</div>
			<div class="container recent__post">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Gerakan Seni Lainnya</h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="row">
				<?php foreach($other as $data){?>
					<div class="col-md-3">
						<a href="<?= base_url("media/index/".$data->id_media) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?= $data->nama_media ?></h4>
								</div>
							</div>
						</a>
					</div>
				<?php } ?>
					
				</div>
			</div>
			</div>
		</article>
	</div>
	<!-- Blog Page end -->
 
