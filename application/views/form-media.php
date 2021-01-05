<?php
	if (isset($error)){
		echo $error;
	}
?>
    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
			<?php foreach($media as $data): ?>
				<form class="needs-validation" method="post" action="<?=base_url('media/insert_media/')?>" enctype="multipart/form-data" novalidate>
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="namaMedia"><h4>Nama Media</h4></label>
                        <input type="text" class="form-control" id="namaMedia" placeholder="Media" name="namaMedia" value="<?=$data->nama_media?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="deskMedia"><h4>Deskripsi</h4></label>
                        <input type="text" class="form-control" id="deskMedia" placeholder="Deskripsi" value="<?=$data->desk_media?>" name="deskMedia" style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
					  	</div>
                   <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
									<?php endforeach ?>
            </blockquote>
        </article>
    </div>
 
