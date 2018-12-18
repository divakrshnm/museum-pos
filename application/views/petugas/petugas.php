<div class="row">
	<div class="col-lg-12">
		<h2>Data Petugas</h2>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
						<th>NIK</th>
						<th>Nama</th>
						<th>Status</th>
						<th>Role</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($petugas as $data){ ?>
					<tr>
						<td>
							<?php echo $data['nik'];?>
						</td>
						<td>
							<?php echo ucwords($data['nama']);?>
						</td>
						<td>
							<?php echo ucwords($data['status']);?>
						</td>
						<td>
							<?php echo ucwords($data['role']);?>
						</td>
						<td>
							<a href="<?php echo base_url('petugas/lihat/'.$data["nik"].'');?>">Lihat</a>
							<a href="<?php echo base_url('petugas/ubah');?>">Ubah</a>
							<a href="<?php echo base_url('petugas/hapus');?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
