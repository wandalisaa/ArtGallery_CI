	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<table class="table">
					<thead class="thead-dark">
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Nama media</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php $no = 1 ; foreach($media as $data){?>
					  <tr>
						<th scope="row"><?=$no; $no++ ;?></th>
						<td><?=$data->nama_media?></td>
						<td>
							<a href="<?= base_url('media/update_media/'.$data->id_media) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('media/index/'.$data->id_media) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="<?= base_url('media/delete_media/'.$data->id_media) ?>" onclick="return confirm('Apakah Anda Yakin ingin mengapus media <?=$data->nama_media?>?');" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
			</blockquote>
		</div>
