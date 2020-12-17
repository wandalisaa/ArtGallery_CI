
	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<?php foreach($artikel as $data_artikel): ?>
			<h3 class="my-2"><?=$data_artikel->judul?></h3>
			<table class="table table-borderless">
				<tr>
					<td>Galeri</td>
					<td><?=$data_artikel->nama_galeri?></td>
				</tr>
				<tr>
					<td>Gerakan Seni</td>
					<td><?=$data_artikel->nama_jenis?></td>
				</tr>
				<tr>
					<td>Seniman</td>
					<td><?=$data_artikel->nama_seniman?></td>
				</tr>
				<tr>
					<td>Media</td>
					<td><?=$data_artikel->nama_media?></td>
				</tr>
			</table>
			<div class="text-right float-right">
				<a  href="<?= base_url('admin/art/'.$data_artikel->id_artikel) ?>" class="btn btn-primary my-2"><i class="fa fa-plus"></i> Tambah Koleksi</a>
			</div>
			<table class="table">
					<thead class="thead-dark">
					
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Judul karya seni</th>
						<th scope="col">tahun dibuat</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php $no = 1; foreach($art as $data){?>
					  <tr>
						<th scope="row"><?=$no; $no++ ;?></th>
						<td><?=$data->judul_art?></td>
						<td><?=$data->tahun_dibuat?></td>
						<td>
							<a href="<?= base_url('art/update_art/'.$data->id_art) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('art/index/'.$data->id_art) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="<?= base_url('art/delete_art/'.$data->id_art) ?>" onclick="return confirm('Apakah Anda Yakin ingin mengapus koleksi <?=$data->judul_art?>?');" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
				<?php endforeach ?>
			</blockquote>
		</div>
