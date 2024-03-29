<?php if($this->session->flashdata('success')){ ?>  
     <div class="alert alert-success">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Berhasil !</strong> <?php echo $this->session->flashdata('success'); ?>  
     </div>  
   <?php }?>
   <?php if($this->session->flashdata('danger')){ ?>  
     <div class="alert alert-danger">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Gagal !</strong> <?php echo $this->session->flashdata('danger'); ?>  
     </div>  
   <?php }?>
   <?php if($this->session->flashdata('logout')){ ?>  
     <div class="alert alert-warning">  
       <a href="#" class="close" data-dismiss="alert">&times;</a>  
       <strong>Logout !</strong> <?php echo $this->session->flashdata('logout'); ?>  
     </div>  
   <?php }?>
	<!-- Hero Section -->
	<section class="hero__section">
		<div class="hero-slider">
			<?php foreach( $jenis as $data ){?>
			<div class="slide-item text-center">
				<a href="<?= base_url('Jenis/index/'.$data->id_jenis) ?>">
                    <img src="<?= base_url().$data->gambar ?>" alt="">
                </a>
                <a href="<?= base_url('Jenis/index/'.$data->id_jenis) ?>">
                    <h2><?= $data->nama_jenis?></h2>
				    <p><?= $data->total ?> item</p>
                </a>
			</div>
			<?php } ?>
		</div>
		<div class="hero-text-slider">
		</div>
	</section>
    <!-- Hero Section end -->
    <!-- abjad -->
    <div class="container recent__post  p-0">
		<div class="text-center mt-5">
			<h2>Semua Gerakan Seni</h2>
		</div>
		<!-- <section class="hero__section mb-3 pt-3">
			<div class="hero-slider-main button-alpha">
				<div class="slide-item text-center">
					<button class="btn btn-secondary active">A</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">B</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">C</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">D</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">E</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">F</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">G</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">H</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">I</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">J</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">K</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">L</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">M</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">N</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">O</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">P</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">Q</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">R</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">S</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">T</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">U</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">V</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">W</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">X</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">Y</button>
				</div>
				<div class="slide-item text-center">
					<button class="btn btn-secondary">Z</button>
				</div>
			</div>
			<div class="hero-text-slider"></div>
		</section> -->
		<div class="row mb-5 justify-content-center button-list">

				<a href="<?= base_url('home/abjad') ?>" type="submit" onclick="" class="btn
				<?php if($active == 'abjad'){ ?> btn-success <?php } else { ?> btn-default <?php } ?> mx-2">
				Urutkan Berdasarkan Abjad
			   </a>
				<a href="<?= base_url('home/waktu') ?>" type="submit" onclick="" class="btn 
				<?php if($active == 'waktu'){ ?> btn-success <?php } else { ?> btn-default <?php } ?> mx-2">
				Urutkan Berdasarkan Waktu
			   </a>
		</div>
        <div class="row" id="result">

		<?php foreach($semuajenis as $data){ ?>
            <div class="col-md-3">
                <div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
                    <div class="blog__content">
                        <div class="blog__date"><?= $data->total?> item</div>
                        <h3><a href=" <?= base_url('Jenis/index/'.$data->id_jenis) ?>"><?= $data->nama_jenis?></a></h3>
						<div class="blog__date"><?= $data->tahun_awal?></div>
                    </div>
                </div>
            </div>
		<?php } ?>
        </div>
    </div>
	<!-- waktu -->
	<script type="text/javascript">
<?php if ($active != 'none'): ?>
	$('html, body').animate({scrollTop:$('#result').position().top}, 'slow');
<?php endif ?>
	</script>

