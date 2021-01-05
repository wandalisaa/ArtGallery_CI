<?php
	if (isset($error)){
		echo $error;
	}
?>
    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
				<form class="needs-validation" method="post" action="<?=base_url('galeri/insert_galeri/')?>" enctype="multipart/form-data" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaGaleri"><h4>Nama Galeri</h4></label>
                        <input type="text" class="form-control" id="namaGaleri" placeholder="Galeri" name="namaGaleri" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskGaleri"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskGaleri" placeholder="Deskripsi" name="deskGaleri"  style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  	</div>
					  	<div class="col-md-6 mb-3">
                        <label for="kota"><h4>Kota</h4></label>
                        <input type="text" class="form-control" id="kota" placeholder="Kota" name="kota" required >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  			</div>
					  			<div class="col-md-6 mb-3">
                        <label for="negara"><h4>Negara</h4></label>
                        <input type="text" class="form-control" id="negara" placeholder="Negara" name="negara" required >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
						</div>
					  <div class="col-md-12 mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="logoGaleri" name="logoGaleri" >
							<label class="custom-file-label" for="logoGaleri">Tambah Logo</label>
						  </div>
					  </div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </blockquote>
        </article>
    </div>
 
