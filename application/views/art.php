
	<!-- Blog Page -->
	<div class="blog__single__page">
		<article class="blog__article pt-5">
		<?php foreach($art as $data){ ?>
			<blockquote class="shadow bg-white">
		<?php if( $this->session->userdata('username') == TRUE): ?>
			<?php foreach($like as $suka){ ?>
				<div class="text-right float-right">
				<?php if( $suka->a == TRUE ){ ?>
					<a class="like-button liked" href="<?= base_url("art/unlike/".$data->id_art) ?>"></a>
				<?php } else { ?>
					<a class="like-button" href="<?= base_url("art/like/".$data->id_art) ?>"></a>
				<?php } ?>
				</div>
			<?php  } ?>
		<?php endif ?>
				
				<h3 class="text-center title py-3"><?=$data->judul_art?></h3>
				<div class="blog__banner pb-4 zoom">
					<img src="<?= base_url().$data->gambar ?>" alt="">
				</div>
				<div class="row mb-3">
					<div class="text-left mr-auto">
						<a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>">
							<h5><?=$data->judul_art?></h5>
							<?php if($data->id_seniman != 0): ?>
							<a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>"><?=$data->nama_seniman?></a><br>
						<?php else: ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php endif ?>	
						</a>
					</div>
					<div class="text-right">
						<a href="<?= base_url("Galeri/index/".$data->id_galeri) ?>">
							<h5><?=$data->nama_galeri?></h5>
							<span><?=$data->kota?>,<?=$data->negara?></span>
						</a>
					</div>
				</div>
				<?php if($data->desk_art == NULL): ?>
							<p class=" text-center unknown">Tidak Ada Keterangan</p><br>
						<?php else: ?>
							<p class="text-center"><?=$data->desk_art?></p>
						<?php endif ?>
					

					<h3 class="my-3">Detail</h3>
					<p>
						<b>Judul:</b><span><?=$data->judul_art?></span><br>
						<b>Tahun Dibuat:</b>
						<?php if($data->tahun_dibuat != 0): ?>
							<span><?=$data->tahun_dibuat?></span><br>
						<?php else: ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php endif ?>
						<b>Seniman:</b>
						<?php if($data->id_seniman != 0): ?>
							<a href="<?= base_url("Seniman/index/".$data->id_seniman) ?>"><?=$data->nama_seniman?></a><br>
						<?php else: ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php endif ?>
						<b>Dimensi:</b>
						<?php if($data->dimensi == NULL): ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php else: ?>
							<span><?=$data->dimensi?></span><br>
						<?php endif ?>
						<b>Jenis:</b><a href="  <?= base_url("Jenis/index/".$data->id_jenis) ?>"><?=$data->nama_jenis?></a><br>
						<b>Media:</b>
						<?php if($data->id_media!= 0): ?>
							<a href="<?= base_url("media/index/".$data->id_media) ?>"><?=$data->nama_media?></a><br>
						<?php else: ?>
							<span class="unknown">Tidak Diketahui</span><br>
						<?php endif ?>
						<b>Credit:</b><a href="<?= base_url("Galeri/index/".$data->id_galeri) ?>"><?=$data->nama_galeri?></a><br>
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
								<img src="<?= base_url().$data->gambar ?>" alt="">
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
