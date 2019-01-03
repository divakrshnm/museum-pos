<table>
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telp</th>
        <th>Kritik Saran</th>
    </tr>
    <?php
        $no = 1;
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo ucwords($kritik_saran['nama']);?></td>
        <td><?php echo $kritik_saran['email'];?></td>
        <td><?php echo $kritik_saran['no_hp'];?></td>
        <td><?php echo ucfirst($kritik_saran['kritik_saran']);?></td>
    </tr>
    <a href="javascript:history.go(-1)">Kembali</a>
							<a href="<?php echo base_url('kritik-saran/hapus/'.$kritik_saran["id"].'');?>">Hapus</a>
</table>
