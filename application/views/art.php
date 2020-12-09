
	<!-- Blog Page -->
	<div class="blog__single__page">
		<article class="blog__article pt-5">
		<?php foreach($art as $data){ ?>
			<blockquote class="shadow bg-white">
				<div class="text-right float-right">
					<button class="like-button" ></button>
				</div>
				<h3 class="text-center title py-3"><?=$data->judul_art?></h3>
				<div class="blog__banner pb-4">
					<img src="<?=$data->gambar?>" alt="">
				</div>
				<div class="row mb-3">
					<div class="text-left mr-auto">
						<a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>">
							<h5><?=$data->judul_art?></h5>
							<span><?=$data->nama_seniman?> </span>	
						</a>
					</div>
					<div class="text-right">
						<a href="<?= base_url("Galeri/index/".$data->id_galeri) ?>">
							<h5><?=$data->nama_galeri?></h5>
							<span><?=$data->kota?>,<?=$data->negara?></span>
						</a>
					</div>
				</div>
				<p class="text-center"><?=$data->desk_art?></p>
					<h3 class="my-3">Detail</h3>
					<p>
						<b>Judul:</b><span><?=$data->judul_art?></span><br>
						<b>Tahun Dibuat:</b><span><?=$data->tahun_dibuat?></span><br>
						<b>Seniman:</b><a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>"><?=$data->nama_seniman?></a><br>
						<b>Dimensi:</b><span> 48 7/16 × 55 1/2 in. (123 × 141 cm)</span><br>
						<b>Jenis:</b><a href="  <?= base_url("Jenis/index/".$data->id_jenis) ?>"><?=$data->nama_jenis?></a><br>
						<b>Media:</b><a href="<?= base_url("Media/index/".$data->id_media) ?>"><?=$data->nama_media?></a><br>
						<b>Credit:</b><a href="<?= base_url("Galeri/index".$data->id_galeri) ?>"><?=$data->nama_galeri?></a><br>
					</p>
			</blockquote>
<?php } ?>
			<div class="container">
				<div class="text-center">
					<h2>Karya Seni Lainnya</h2>
				</div>

				<div class="row w-100">
				<section class="hero__section w-100" >
					<div class="hero-slider">
						<?php foreach( $other as $data ){?>
						<div class="slide-item text-center">
							<a href="<?= base_url('art/index/'.$data->id_art) ?>">
								<img src="<?= $data->gambar ?>" alt="">
							</a>
							<a href="<?= base_url('art/index/'.$data->id_art) ?>">
								<h2><?= $data->judul_art?></h2>
							</a>
						</div>
						<?php } ?>
					</div>
					<div class="hero-text-slider">
					</div>
				</section>
			</div>
		</article>
	</div>
	<!-- Blog Page end -->
