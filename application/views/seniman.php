

	<!-- Blog Page -->
	<div class="blog__single__page">
		<article class="blog__article pt-5">
			<blockquote class="shadow bg-white">
				<?php foreach($seniman as $data){?>
                <h3 class="text-center title py-3"><?=$data->nama_seniman?></h3>
                <div class="blog__header">
					<div class="blog__metas">
						<div class="blog__meta"><?=$data->tanggal_lahir?></div>
					</div>
				</div>
				<p class="text-center"><?=$data->desk_seniman?></p>
				<?php } ?>
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
                                    <h6><?=$data->judul?></h6>
                                    <div class="blog__date text-dark"><?=$data->nama_galeri?></div>
                                </a>
                            </div>
							<?php } ?>
                        </div>
                    </div>
					<div class="blog__slider pt-3">
				<?php foreach($art as $data){?>
                    <div class="blog__slider__item">
                        <a href="<?= base_url("Art/index/".$data->id_art) ?>"><img src="<?= base_url().$data->gambar ?>" alt=""></a>
                    </div>
				<?php } ?>
                </div>
            </blockquote>
			<div class="container recent__post">
				<div class="text-center">
					<h2>Seniman Lainnya</h2>
				</div>
				<div class="row">
					<?php foreach($other as $data){?>
					<div class="col-md-3">
						<a href="<?= base_url("seniman/index/".$data->id_seniman) ?>">
							<div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
								<div class="blog__content text-white">
									<h4><?=$data->nama_seniman?></h4>
								</div>
							</div>
						</a>
					</div>
					<?php } ?>
				</div>
			</div>
		</article>
	</div>
	<!-- Blog Page end -->
 
