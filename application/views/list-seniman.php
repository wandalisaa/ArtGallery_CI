	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<table class="table">
					<thead class="thead-dark">
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Nama Seniman</th>
						<th scope="col">tanggal lahir</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php $no = 1 ; foreach($seniman as $data){?>
					  <tr>
						<th scope="row"><?=$no; $no++ ;?></th>
						<td><?=$data->nama_seniman?></td>
						<td><?=$data->tanggal_lahir?></td>
						<td>
							<a href="<?= base_url('seniman/update_seniman/'.$data->id_seniman) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="<?= base_url('seniman/index/'.$data->id_seniman) ?>" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="<?= base_url('seniman/delete_seniman/'.$data->id_seniman) ?>" onclick="return confirm('Apakah Anda Yakin ingin mengapus seniman <?=$data->nama_seniman?>?');" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
			</blockquote>
		</div>
		<script>
	 $(document).ready(function() {
      $('.table').DataTable();
  });
</script>
