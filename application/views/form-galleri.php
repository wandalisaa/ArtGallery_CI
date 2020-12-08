<?php foreach($galeri as $data){?>
    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
				<form class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaGaleri"><h4>Nama Galeri</h4></label>
                        <input type="text" class="form-control" id="namaGaleri" placeholder="Galeri" value="<?=$data->nama_galeri?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskGaleri"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskGaleri" placeholder="Deskripsi" value="<?=$data->desk_galeri?>" required style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  			</div>
					  			<div class="col-md-6 mb-3">
                        <label for="kota"><h4>Kota</h4></label>
                        <input type="text" class="form-control" id="kota" placeholder="Kota" value="<?=$data->kota?>" required >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  			</div>
					  			<div class="col-md-6 mb-3">
                        <label for="negara"><h4>Negara</h4></label>
                        <input type="text" class="form-control" id="negara" placeholder="Negara" value="<?=$data->negara?>" required >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
									</div>
											<div class="col-md-6 mb-3">
                        <label for="deskripsi"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskripsi" placeholder="Deskripsi" value="<?=$data->negara?>" required >
                        <div class="valid-feedback">
                          Bagus !
                      </div>
					  </div>
					  <div class="col-md-12 mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="logoGaleri" required>
							<label class="custom-file-label" for="logoGaleri">Tambah Logo</label>
						  </div>
					  </div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
            </blockquote>
        </article>
    </div>
<?php } ?>
 
