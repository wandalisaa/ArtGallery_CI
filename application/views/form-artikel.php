

    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
			<?php foreach($artikel as $data_artikel): ?>
				<form class="needs-validation" novalidate method="post" action="<?=base_url('artikel/do_update/'.$data_artikel->id_artikel)?>">
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaArtikel"><h4>Nama Artikel</h4></label>
                        <input type="text" class="form-control" name="judul" id="namaArtikel" placeholder="Artikel" value="<?=$data_artikel->judul?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskArtikel"><h4>Deskripsi</h4></label>
                        <textarea class="form-control" name="deskripsi" id="deskArtikel" placeholder="Deskripsi"   style="height: 300px;"> <?=$data_artikel->deskripsi?></textarea>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  </div>
					  <div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="jenis"><h4>Gerakan Seni</h4></label>
							<select id="jenis" name="jenis" class="custom-select" required>
							  <option value="<?=$data_artikel->id_jenis?>" ><?=$data_artikel->nama_jenis?></option>
							<?php foreach($jenis as $data): ?>
							  <option value="<?=$data->id_jenis?>"><?=$data->nama_jenis?></option>
							<?php endforeach ?>
							</select>
							<div class="invalid-feedback">Form ini harus diisi</div>
						</div>
					  </div>
					  <div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="media"><h4>Media</h4></label>
							<select id="media" name="media" class="custom-select">
							  <option value="<?=$data_artikel->id_media?>"><?=$data_artikel->nama_media?></option>
							  <?php foreach($media as $data): ?>
							  <option value="<?=$data->id_media?>"><?=$data->nama_media?></option>
							<?php endforeach ?>
							</select>
							<div class="invalid-feedback">Form ini harus diisi</div>
						</div>
					  </div>
					  <div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="seniman"><h4>Seniman</h4></label>
							<select id="seniman" name="seniman" class="custom-select">
							  <option value="<?=$data_artikel->id_seniman?>"><?=$data_artikel->nama_seniman?></option>
							  <?php foreach($seniman as $data): ?>
							  <option value="<?=$data->id_seniman?>"><?=$data->nama_seniman?></option>
							<?php endforeach ?>
							</select>
							<div class="invalid-feedback">Form ini harus diisi</div>
						</div>
					  </div>
					  <div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="galeri"><h4>Galeri</h4></label>
							<select id="galeri" name="galeri" class="custom-select" required>
							  <option value="<?=$data_artikel->id_galeri?>"><?=$data_artikel->nama_galeri?></option>
							  <?php foreach($galeri as $data): ?>
							  <option value="<?=$data->id_galeri?>"><?=$data->nama_galeri?></option>
							<?php endforeach ?>
							</select>
							<div class="invalid-feedback">Form ini harus diisi</div>
						</div>
					  </div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
				  <?php endforeach ?>
            </blockquote>
        </article>
    </div>

 
