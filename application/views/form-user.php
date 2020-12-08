
<?php foreach($user as $data){ ?>
    <div class="blog__single__page">
		<article class="blog__article pt-3">
			<blockquote class="shadow bg-white">
				<form class="needs-validation" novalidate method="post" action="<?= site_url('auth/do_update/'.$data->id_user)?>">
                    <div class="form-row">
                      <div class="col-md-12 mb-3">
                        <label for="username"><h4>Username</h4></label>
                        <input type="text" class="form-control"  name="username" placeholder="username" value="<?=$data->username?>" required>
                        <div class="valid-feedback">
                          Bagus !
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <label for="email"><h4>Email</h4></label>
                        <input type="text" class="form-control"  name="email" placeholder="Email" value="<?=$data->email?>" required style="height: 100px;">
                        <div class="valid-feedback">
                          Bagus !
                        </div>
						</div>
						<div class="col-md-12 mb-3">
                        <label for="password"><h4>Password</h4></label>
                        <input type="password" class="form-control" name="password"  placeholder="Password" value="<?=$data->password?>" required>
                        <div class="valid-feedback">
                          Bagus !
						</div>
						<input type="number" class="form-control" name="level"  value="<?=$data->level?>" required hidden>
					  	</div>
                    <button class="btn btn-success ml-auto" type="submit">Simpan</button>
                  </form>
            </blockquote>
        </article>
	</div>
<?php } ?>

 
