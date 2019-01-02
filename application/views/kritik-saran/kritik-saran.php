<div class="row">
	<div class="col-lg-12">
		<h2>Data Kritik Saran</h2>
		<div class="table-responsive">
			<table class="table table-bordered table-hover table-striped">
				<thead>
					<tr>
                    <th>No.</th>
        <th>Nama</th>
		<th>Hp</th>
        <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
    <?php 
        $no = 1;
        foreach($kritik_saran as $ks){ 
    ?>
    <tr>
        <td><?php echo $no++;?></td>
        <td><?php echo ucwords($ks['nama']);?></td>
		<td><?php echo ucwords($ks['no_hp']);?></td>
        <td>
							<a href="<?php echo base_url('kritik-saran/lihat/'.$ks["id"].'');?>">Lihat</a>
							<a href="<?php echo base_url('kritik-saran/hapus/'.$ks["id"].'');?>">Hapus</a>
						</td>
    </tr>
    <?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
