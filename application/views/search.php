

	<div class="blog__single__page">
		<article class="blog__article pt-5">
		<?php if($artikel != NULL): ?>
			<blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2>Artikel </h2>
					</div>
					<hr class="w-100">
				</div>
				
				<div class="artikel__slider">
                  <?php foreach($artikel as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("Artikel/index/".$data->id_artikel) ?>">
							<div class="blog__item  set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
								</div>
							</div>
							<h6><?=$data->judul?></h6>
						</a>
					</div>
				<?php endforeach ?>
				</div>
            </blockquote>
		<?php endif ?>
		<?php if($jenis != NULL): ?>
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Gerakan Seni </h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($jenis as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("jenis/index/".$data->id_jenis) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->nama_jenis?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
            </blockquote>
			<?php endif ?>
			<?php if($galeri != NULL): ?>
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Galeri </h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($galeri as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("galeri/index/".$data->id_galeri) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->nama_galeri?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
            </blockquote>
			<?php endif ?>
			<?php if($seniman != NULL): ?>
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Seniman </h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($seniman as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("seniman/index/".$data->id_seniman) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->nama_seniman?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
            </blockquote>
			<?php endif ?>
			<?php if($media != NULL): ?>
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Media </h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($media as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("media/index/".$data->id_media) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->nama_media?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php endforeach ?>
				</div>
            </blockquote>
			<?php endif ?>
			<?php if($art != NULL): ?>
            <blockquote class="shadow bg-white">
				<div class="row">
					<div class="text-left">
						<h2 class="mb-2">Karya Seni </h2>
					</div>
					<hr class="w-100">
				</div>
				<div class="artikel__slider">
				<?php foreach($art as $data): ?>
					<div class="blog__slider__item p-3">
						<a href="<?= base_url("art/index/".$data->id_art) ?>">
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
			<?php endif ?>
		</article>
	</div>
