<?php $id = $this->session->userdata('id_user'); ?>
	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
                <h3 class="text-center title py-3"><?= $this->session->userdata('username'); ?></h3>
                <div class="blog__header">
					<div class="blog__metas">
						<div class="blog__meta"><?= $this->session->userdata('email'); ?></div>
					</div>
				</div>
				<a href="<?= base_url('Auth/update/'.$id) ?>" class="btn btn-primary">Update Profil</a>
			</blockquote>
		</div>
