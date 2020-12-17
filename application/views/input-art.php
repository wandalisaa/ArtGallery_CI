

    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
			<?php foreach($artikel as $data): ?>
			<h3 class="my-3"><?=$data->judul?></h3>
				<form class="needs-validation" method="post" action="<?=base_url('art/insert_art/'.$data->id_artikel)?>" enctype="multipart/form-data" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaKarya"><h4>Nama Karya</h4></label>
                        <input type="text" class="form-control" id="namaKarya" name="judulKarya" placeholder="Karya" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskKarya"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskKarya" name="deskKarya" placeholder="Deskripsi" value="" required style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  </div>
					  <div class="col-md-6 mb-3">
                        <label for="yearpicker"><h4>Tahun Dibuat</h4></label>
                        <input type="number" class="form-control" id="yearpicker" name="tahunDibuat" placeholder="Tahun Dibuat" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  </div>
					  <div class="col-md-6 mb-3">
                        <label for="lokasiKarya"><h4>Lokasi</h4></label>
                        <input type="text" class="form-control" id="lokasiKarya" name="lokasiKarya" placeholder="Lokasi Pembuatan" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
											<div class="col-md-12 mb-3">
                        <label for="namaKarya"><h4>Dimensi Karya</h4></label>
                        <input type="text" class="form-control" id="namaKarya" name="dimensiKarya" placeholder="Karya" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
					  <div class="col-md-12 mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="gambar" name="gambar" required>
							<label class="custom-file-label" for="gambar">Input Karya Seni</label>
						  </div>
					  </div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
				<?php endforeach ?>
            </blockquote>
        </article>
    </div>


