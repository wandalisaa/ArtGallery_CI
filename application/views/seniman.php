

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

                            <div class="blog__slider__item p-3">
                                <a href="<?= base_url("Artikel/index") ?>">
                                    <div class="blog__item  set-bg" data-setbg="img/blog/4.jpg">
                                        <div class="blog__content text-white">
                                        </div>
                                    </div>
                                    <h6>Playing With Dimensions</h6>
                                    <div class="blog__date text-dark">Lettl Collection</div>
                                </a>
                            </div>

                        </div>
                    </div>
                <div class="blog__slider">
                    <div class="blog__slider__item">
                        <a href="<?= base_url("Art/index") ?>"><img src="img/blog-single/1.jpg" alt=""></a>
                    </div>
                    <div class="blog__slider__item">
                        <a href="<?= base_url("Art/index") ?>"><img src="img/blog-single/2.jpg" alt=""></a>
                    </div>
                    <div class="blog__slider__item">
                        <a href="<?= base_url("Art/index") ?>"><img src="img/blog-single/3.jpg" alt=""></a>
                    </div>
                </div>
            </blockquote>
			<div class="container recent__post">
				<div class="text-center">
					<h2>Seniman Lainnya</h2>
				</div>
				<div class="row">
					<div class="col-md-3">
						<a href="<?= base_url("Artikel/index") ?>">
							<div class="blog__item set-bg" data-setbg="img/blog/4.jpg">
								<div class="blog__content text-white">
									<div class="blog__date">123 item</div>
									<h4>Seni Kontemporer</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="<?= base_url("Artikel/index") ?>">
							<div class="blog__item set-bg" data-setbg="img/blog/2.jpg">
								<div class="blog__content text-white">
									<div class="blog__date">123 item</div>
									<h4>Seni Kontemporer</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="<?= base_url("Artikel/index") ?>">
							<div class="blog__item set-bg" data-setbg="img/blog/3.jpg">
								<div class="blog__content text-white">
									<div class="blog__date">123 item</div>
									<h4>Seni Kontemporer</h4>
								</div>
							</div>
						</a>
					</div>
					<div class="col-md-3">
						<a href="<?= base_url("Artikel/index") ?>">
							<div class="blog__item set-bg" data-setbg="img/blog/3.jpg">
								<div class="blog__content text-white">
									<div class="blog__date">123 item</div>
									<h4>Seni Kontemporer</h4>
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</article>
	</div>
	<!-- Blog Page end -->
 
