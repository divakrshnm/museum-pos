<table>
<tr>
<th>NIK</th>
<th>Nama</th>
<th>Tempat Lahir</th>
<th>Tanggal Lahir</th>
<th>Alamat</th>
<th>No. Telp</th>
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Role</th>
</tr>
<tr>
<td><?php echo $petugas['nik'];?></td>
<td><?php echo ucwords($petugas['nama']);?></td>
<td><?php echo ucwords($petugas['tempat_lahir']);?></td>
<td><?php echo date_format(date_create($petugas['tanggal_lahir']), "d-m-Y");?></td>
<td><?php echo ucwords($petugas['alamat']);?></td>
<td><?php echo $petugas['no_telp'];?></td>
<td><?php echo $petugas['username'];?></td>
<td><?php echo $petugas['password'];?></td>
<td><?php echo ucwords($petugas['status']);?></td>
<td><?php echo ucwords($petugas['role']);?></td>
</tr>
</table>
<a href="<?php echo base_url('petugas/ubah/'.$petugas["nik"].'');?>" class="btn btn-primary">Ubah</a>
<a href="<?php echo base_url('petugas/hapus/'.$petugas["nik"].'');?>" class="btn btn-danger">Hapus</a>
<a href="javascript:history.go(-1)">Kembali</a>
