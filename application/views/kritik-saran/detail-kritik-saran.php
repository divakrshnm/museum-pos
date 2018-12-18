<p>Kritik dan Saran</p>
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
        foreach($kritik_saran as $ks){ 
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo ucwords($ks['nama']);?></td>
        <td><?php echo $ks['email'];?></td>
        <td><?php echo $ks['no_hp'];?></td>
        <td><?php echo ucfirst($ks['kritik_saran']);?></td>
    </tr>
<?php } ?>
</table>