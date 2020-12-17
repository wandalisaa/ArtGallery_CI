	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<table class="table">
					<thead class="thead-dark">
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Nama Gerakan Seni</th>
						<th scope="col">Tahun Mulai Berkembang</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php $no = 1 ; foreach($jenis as $data){?>
					  <tr>
						<th scope="row"><?=$no; $no++ ;?></th>
						<td><?=$data->nama_jenis?></td>
						<td><?=$data->tahun_awal?></td>
						<td>
							<a href="<?= base_url('jenis/update_jenis/'.$data->id_jenis) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('jenis/index/'.$data->id_jenis) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="<?= base_url('jenis/delete_jenis/'.$data->id_jenis) ?>" onclick="return confirm('Apakah Anda Yakin ingin mengapus jenis <?=$data->nama_jenis?>?');" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
			</blockquote>
		</div>
