

    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
				<?php foreach($seniman as $data): ?>
				<form class="needs-validation" novalidate method="post" action="<?= site_url('seniman/do_update/'.$data->id_seniman) ?>">
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaSeniman"><h4>Nama Seniman</h4></label>
                        <input type="text" class="form-control" id="namaSeniman" name="namaSeniman" placeholder="Seniman" value="<?=$data->nama_seniman?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskSeniman"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskSeniman" name="deskSeniman" placeholder="Deskripsi" value="<?=$data->desk_seniman?>" style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
											</div>
											<div class="col-md-12 mb-3">
                        <label for="tglSeniman"><h4>Tanggal Lahir</h4></label>
                        <input type="date" class="form-control" id="tglSeniman" name="tanggalLahir"  placeholder="Tanggal Lahir" value="<?=$data->tanggal_lahir?>" >
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  					</div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
				<?php endforeach ?>
            </blockquote>
        </article>
    </div>

 
