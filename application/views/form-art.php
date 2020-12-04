

    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
				<form class="needs-validation" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaKarya"><h4>Nama Karya</h4></label>
                        <input type="text" class="form-control" id="namaKarya" placeholder="Karya" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskKarya"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskKarya" placeholder="Deskripsi" value="" required style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  </div>
					  <div class="col-md-6 mb-3">
                        <label for="thnKarya"><h4>Tahun Dibuat</h4></label>
                        <input type="date" class="form-control" id="thnKarya" placeholder="Tahun Dibuat" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  </div>
					  <div class="col-md-6 mb-3">
                        <label for="lokasiKarya"><h4>Lokasi</h4></label>
                        <input type="text" class="form-control" id="lokasiKarya" placeholder="Lokasi Pembuatan" value="" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
					  <div class="col-md-6 mb-3">
						<div class="form-group">
							<label for="artikel"><h4>Artikel</h4></label>
							<select id="artikel" class="custom-select" required>
							  <option value="">Pilih artikel</option>
							  <option value="1">Judul artikel , nama seniman - nama galeri</option>
							  <option value="2">Judul artikel , nama seniman - nama galeri</option>
							  <option value="3">Judul artikel , nama seniman - nama galeri</option>
							</select>
							<div class="invalid-feedback">Example invalid custom select feedback</div>
						</div>
					  </div>
					  <div class="col-md-12 mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" id="logoGaleri" required>
							<label class="custom-file-label" for="logoGaleri">Input Karya Seni</label>
						  </div>
					  </div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
            </blockquote>
        </article>
    </div>

