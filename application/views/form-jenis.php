

    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
			<?php foreach($jenis as $data): ?>
				<form class="needs-validation" method="post" action="<?=base_url('jenis/insert_jenis/'.$data->id_jenis)?>" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaJenis"><h4>Nama Gerakan Seni</h4></label>
                        <input type="text" class="form-control" name="namaJenis" placeholder="Gerakan Seni" value="<?=$data->nama_jenis?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskJenis"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" name="deskJenis" placeholder="Deskripsi" value="<?=$data->desk_jenis?>" required style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
								</div>
								<div class="col-md-6 mb-3">
                        <label for="thnAwal"><h4>Mulai di kenal pada tahun</h4></label>
                        <input type="number" class="form-control" name="tahunAwal" placeholder="tahun awal" value="<?=$data->tahun_awal?>" required >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  			</div>
									<div class="col-md-6 mb-3">
                        <label for="thnAwal"><h4>Sampai</h4></label>
                        <input type="number" class="form-control" name="tahunAkhir" placeholder="tahun akhir ( optional )" value="<?=$data->tahun_akhir?>" >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  			</div>
									<div class="col-12">
									<button class="btn btn-success ml-auto" type="submit">Simpan</button>
									</div>
                  
                  </form>
									<?php endforeach ?>
            </blockquote>
        </article>
    </div>
