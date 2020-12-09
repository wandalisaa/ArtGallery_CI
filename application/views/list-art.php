
	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
			<table class="table">
					<thead class="thead-dark">
					
					  <tr>
						<th scope="col">No</th>
						<th scope="col">Judul karya seni</th>
						<th scope="col">tahun dibuat</th>
						<th scope="col">Artikel</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
					<?php foreach($art as $data){?>
					  <tr>
						<th scope="row"><?php $no = 1; echo $no; $no++ ;?></th>
						<td><?=$data->judul_art?></td>
						<td><?=$data->tahun_dibuat?></td>
						<td><?=$data->judul?></td>
						<td>
							<a href="" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="edit"><i class="fa fa-edit"></i></a>
							<a href="" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="bottom" title="detail"><i class="fa fa-eye"></i></a>
							<a href="" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
						</td>
					  </tr>
					  <?php } ?>
					</tbody>
				  </table>
			</blockquote>
		</div>
