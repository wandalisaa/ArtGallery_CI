
<style>
.dataTables_wrapper{
	width: 100%;
}
</style>
	<!-- Blog Page -->
	<div class="blog__single__page pb-5">
		<article class="blog__article pt-2 ">
			<blockquote class="shadow bg-white p-3 mb-5" style="text-align: -webkit-center;">
                <h3 class="text-center title py-3"><?= $this->session->userdata('username'); ?></h3>
                <div class="blog__header">
					<div class="blog__metas">
						<div class="blog__meta"><?= $this->session->userdata('email'); ?></div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 mb-4">
						<div class="card bg-primary text-white">
						  <div class="card-body">
							  <div class="row">
								  <div class="text-left w-50 pl-3">
									   <a href="<?= base_url("admin/list_artikel/") ?>">Artikel</a>
										<div class="text-white-50 small">Tambahkan Artikel</div>
								  </div>
								  <div class="text-right w-50 pr-3 plus-btn">
									  <a href="<?= base_url("admin/artikel/") ?>">
										  <i class="fa fa-plus fa-lg"></i>
									  </a>
								  </div>
							  </div>
						  </div>
						</div>
					  </div>
					  <div class="col-lg-4 mb-4">
						<div class="card bg-info text-white">
							<div class="card-body">
								<div class="row">
									<div class="text-left w-50 pl-3">
									<a href="<?= base_url("admin/list_galeri/") ?>">Galeri</a>
										  <div class="text-white-50 small">Tambahkan Galeri</div>
									</div>
									<div class="text-right w-50 pr-3 plus-btn">
										<a href="<?= base_url("admin/galeri/") ?>">
											<i class="fa fa-plus fa-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div class="col-lg-4 mb-4">
						<div class="card bg-warning text-white">
							<div class="card-body">
								<div class="row">
									<div class="text-left w-50 pl-3">
									<a href="<?= base_url("admin/list_media/") ?>">Media</a>
										  <div class="text-white-50 small">Tambahkan Media</div>
									</div>
									<div class="text-right w-50 pr-3 plus-btn">
										<a href="<?= base_url("admin/media/") ?>">
											<i class="fa fa-plus fa-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div class="col-lg-4 mb-4">
						<div class="card bg-danger text-white">
							<div class="card-body">
								<div class="row">
									<div class="text-left w-50 pl-3">
									<a href="<?= base_url("admin/list_seniman/") ?>">Seniman</a>
										  <div class="text-white-50 small">Tambahkan seniman</div>
									</div>
									<div class="text-right w-50 pr-3 plus-btn">
										<a href="<?= base_url("admin/seniman/") ?>">
											<i class="fa fa-plus fa-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					  </div>
					  <div class="col-lg-4 mb-4">
						<div class="card bg-success text-white">
							<div class="card-body">
								<div class="row">
									<div class="text-left w-50 pl-3">
									<a href="<?= base_url("admin/list_jenis/") ?>">Gerakan Seni</a>
										  <div class="text-white-50 small">Tambahkan Gerakan Seni</div>
									</div>
									<div class="text-right w-50 pr-3 plus-btn">
										<a href="<?= base_url("admin/jenis/") ?>">
											<i class="fa fa-plus fa-lg"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					  </div>
				</div>
				<h3 class="my-3">Daftar User</h3>
				<div class="row">
				<table class="table mx-3 w-100">
					<thead class="thead-dark">
					  <tr>
						<th scope="col">No</th>
						<th scope="col">username</th>
						<th scope="col">email</th>
						<th scope="col">Aksi</th>
					  </tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach($user as $data){?>
					  <tr>
						<th scope="row"><?php echo $no; $no++; ?></th>
						<td><?=$data->username?></td>
						<td><?=$data->email?></td>
						<td>
							<?php if($data->level != '1'){?>
							<a onclick="return confirm('Anda Yakin ingin menghapus user <?=$data->username?> ?')" href="<?= base_url('Auth/delete/'.$data->id_user) ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="bottom" title="hapus"><i class="fa fa-trash"></i></a>
							<?php } else { ?>
								<a href="<?= base_url('Auth/update/'.$data->id_user) ?>" class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fa fa-edit"></i></a>
							<?php } ?>
						</td>
					  </tr>
						<?php } ?>
					</tbody>
				  </table>
				</div>
			</blockquote>
		</div>
		<script>
	 $(document).ready(function() {
      $('.table').DataTable();
  });
</script>
