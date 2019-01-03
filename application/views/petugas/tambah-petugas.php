<div class="row">
	<div class="col-lg-12">
		<form action="<?php echo base_url().'petugas/tambah-proses'; ?>" method="post" enctype="multipart/form-data" role="form">
			<div class="col-lg-6">
				<div class="form-group">
					<label class="control-label">NIK *</label>
					<input type="text" name="nik" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">Tempat Lahir </label>
					<input type="text" name="tempat_lahir" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">No. Telp </label>
					<input type="text" name="no_telp" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">Username * </label>
					<input type="text" name="username" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">Password *</label>
					<input type="text" name="password" value="" class="form-control">
				</div>

            </div>
			<div class="col-lg-6">
                <div class="form-group">
					<label class="control-label">Nama *</label>
					<input type="text" name="nama" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">Tanggal lahir </label>
					<input type="date" name="tanggal_lahir" value="" class="form-control">
				</div>
                <div class="form-group">
					<label class="control-label">Alamat</label>
					<textarea class="form-control" rows="3" name="alamat"></textarea>
				</div>
                <div class="form-group" style="margin-top:32px;">
					<label class="control-label">Role </label>
					<select name="role" class="form-control">
                        <option value="" selected disabled>Pilih Role</option>
                        <option value="super admin">Super Admin</option>
                        <option value="admin">Admin</option>
                    </select>
				</div>
            </div>
            <div class="col-lg-12">
            <div class="form-group text-right">
                <input type="submit" value="Tambah" class="btn btn-primary">
				</div>
				<a href="javascript:history.go(-1)">Batal</a>
                </div>

		</form>
	</div>
</div>
