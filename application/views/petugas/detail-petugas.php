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
<?php foreach($petugas as $p){ ?>
<tr>
<td><?php echo $p['nik'];?></td>
<td><?php echo ucwords($p['nama']);?></td>
<td><?php echo ucwords($p['tempat_lahir']);?></td>
<td><?php echo date_format(date_create($p['tanggal_lahir']), "d-m-Y");?></td>
<td><?php echo ucwords($p['alamat']);?></td>
<td><?php echo $p['no_telp'];?></td>
<td><?php echo $p['username'];?></td>
<td><?php echo $p['password'];?></td>
<td><?php echo ucwords($p['status']);?></td>
<td><?php echo ucwords($p['role']);?></td>
</tr>
<?php } ?>
</table>