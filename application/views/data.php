<?php foreach($semuajenis as $data){ ?>
            <div class="col-md-3">
                <div class="blog__item set-bg" data-setbg="<?= base_url().$data->gambar ?>">
                    <div class="blog__content">
                        <div class="blog__date"><?= $data->total?> item</div>
                        <h3><a href=" <?= base_url('Jenis/index/'.$data->id_jenis) ?>"><?= $data->nama_jenis?></a></h3>
                    </div>
                </div>
            </div>
		<?php } ?>
