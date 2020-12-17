	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<table class="table">
					<thead class="thead-dark">
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Judul Artikel</th>
						<th scope="col">Nama Seniman</th>
						<th scope="col">Nama Galeri</th>
						<th scope="col">Nama Gerakan Seni</th>
						<th scope="col">media</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php $no = 1 ; foreach($artikel as $data){?>
					  <tr>
						<th scope="row"><?=$no; $no++ ;?></th>
						<td><?=$data->judul?></td>
						<td><?=$data->nama_seniman?></td>
						<td><?=$data->nama_galeri?></td>
						<td><?=$data->nama_jenis?></td>
						<td><?=$data->nama_media?></td>
						<td>
							<a href="<?= base_url('artikel/update_artikel/'.$data->id_artikel) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('artikel/index/'.$data->id_artikel) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="<?= base_url('artikel/delete_artikel/'.$data->id_artikel) ?>" onclick="return confirm('Apakah Anda Yakin ingin mengapus artikel <?=$data->judul?>?');" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
							<a href="<?= base_url('art/koleksi_artikel/'.$data->id_artikel) ?>" class="btn btn-warning btn-sm text-white" data-toggle="tooltip" data-placement="bottom" title="lihat koleksi"><i class="fa fa-bars"></i></a>
						</td>
					  </tr>
					<?php } ?>
					</tbody>
				  </table>
			</blockquote>
		</div>
