<div class="row">
  <div class="col-lg-12">
    <form action="<?php echo base_url().'petugas/ubah-proses/'.$petugas['nik']; ?>" method="post" enctype="multipart/form-data" role="form">
      <div class="col-lg-6">
        <div class="form-group">
          <label class="control-label">NIK *</label>
          <input type="text" name="nik" value="<?php echo $petugas['nik']; ?>" class="form-control" disabled>
        </div>
        <div class="form-group">
          <label class="control-label">Tempat Lahir </label>
          <input type="text" name="tempat_lahir" value="<?php echo ucwords($petugas['tempat_lahir']);?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">No. Telp </label>
          <input type="text" name="no_telp" value="<?php echo $petugas['no_telp'];?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">Username * </label>
          <input type="text" name="username" value="<?php echo $petugas['username'];?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">Password *</label>
          <input type="text" name="password" value="" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">Status </label>
          <select name="status" class="form-control">
            <option value="" disabled>Pilih Status</option>
            <option value="aktif" <?php if($petugas['status'] == "aktif"){echo "selected";}?>>Aktif</option>
            <option value="tidak aktif" <?php if($petugas['status'] == "tidak aktif"){echo "selected";}?>>Tidak Aktif</option>
          </select>
        </div>

      </div>
      <div class="col-lg-6">
        <div class="form-group">
          <label class="control-label">Nama *</label>
          <input type="text" name="nama" value="<?php echo ucwords($petugas['nama']);?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">Tanggal lahir </label>
          <input type="date" name="tanggal_lahir" value="<?php echo $petugas['tanggal_lahir'];?>" class="form-control">
        </div>
        <div class="form-group">
          <label class="control-label">Alamat</label>
          <textarea class="form-control" rows="7" name="alamat"><?php echo ucwords($petugas['alamat']);?></textarea>
        </div>
        <div class="form-group" style="margin-top:27px;">
          <label class="control-label">Role </label>
          <select name="role" class="form-control">
            <option value="" disabled>Pilih Role</option>
            <option value="super admin" <?php if($petugas['role'] == "super admin"){echo "selected";}?>>Super Admin</option>
            <option value="admin" <?php if($petugas['role'] == "admin"){echo "selected";}?>>Admin</option>
          </select>
        </div>
      </div>
      <div class="col-lg-12">
        <div class="form-group text-right">
          <input type="submit" value="Ubah" class="btn btn-primary">
        </div>
        <a href="javascript:history.go(-1)">Batal</a>
      </div>

    </form>
  </div>
</div>
