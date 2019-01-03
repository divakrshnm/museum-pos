<div class="row">
<div class="col-lg-6">

<h2>Data Koleksi</h2>
</div>
<div class="col-lg-6 text-right">
<a href="<?php echo base_url().'petugas/tambah'; ?>" class="btn btn-primary" style="margin-top:17px">Tambah Data</a>
</div>
	<div class="col-lg-12">
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
							<a href="<?php echo base_url('petugas/ubah/'.$data["nik"].'');?>">Ubah</a>
							<a href="<?php echo base_url('petugas/hapus/'.$data["nik"].'');?>">Hapus</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
