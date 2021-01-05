

	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<div class="blog__slider">
		<?php foreach($art as $data): ?>
			<a href="<?= base_url("Art/index/".$data->id_art) ?>" class="blog__slider__item">
				<img src="<?= base_url().$data->gambar ?>" alt="" title="<?=$data->judul_art?>">
			</a>
			<?php endforeach ?>
		</div>
		<?php foreach($artikel as $data): ?>
		<article class="blog__article mb-5">
			<div class="blog__container">
				<div class="blog__header">
					<div class="blog__cata"><?=$data->nama_jenis?></div>
					<h2 class="blog__single__title"><?=$data->judul?></h2>
					<div class="blog__metas">
						<div class="blog__meta">
						<?php if($data->id_seniman != 0): ?>
							<a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>"><?=$data->nama_seniman?></a><br>
						<?php else: ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php endif ?>	
						</div>
						<div class="blog__meta"><a href="<?= base_url("galeri/index/".$data->id_galeri) ?>"><?=$data->nama_galeri?></a></div>
					</div>
				</div>
				<p><?=$data->deskripsi?></p>
			</div>
		</article>
		<?php endforeach ?>
	</div>

