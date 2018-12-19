<table>
	<tr>
		<td>No. Inventaris</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['no_inventaris']; ?>
		</td>
	</tr>
	<tr>
		<td>Tanggal Masuk</td>
		<td>:</td>
		<td>
			<?php echo date_format(date_create($koleksi['tanggal_masuk']), "d F Y");  ?>
		</td>
	</tr>
	<tr>
		<td>Jenis</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['jenis']; ?>
		</td>
	</tr>
	<tr>
		<td>Nama Koleksi</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['nama_koleksi']; ?>
		</td>
	</tr>
	<tr>
		<td>Daerah Asal</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['daerah_asal'])){
			echo $koleksi['daerah_asal']; 
		}else{
			echo '-';
		}
		
		?>

		</td>
	</tr>
	<tr>
		<td>Tanggal Pembuatan</td>
		<td>:</td>
		<td>
			<?php 
		if($koleksi['tanggal_pembuatan'] != '0000-00-00'){
			echo date_format(date_create($koleksi['tanggal_pembuatan']), "d F Y");
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Tanggal Pemakaian</td>
		<td>:</td>
		<td>
			<?php 
		if($koleksi['tanggal_pemakaian'] != '0000-00-00'){
			echo date_format(date_create($koleksi['tanggal_pemakaian']), "d F Y");
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Bentuk</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['bentuk'])){
			echo $koleksi['bentuk']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Banyaknya</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['banyaknya']; ?>
		</td>
	</tr>
	<tr>
		<td>Nilai</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['nilai']; ?>
		</td>
	</tr>
	<tr>
		<td>Ukuran</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['ukuran'])){
			echo $koleksi['ukuran']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Bahan</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['bahan'])){
			echo $koleksi['bahan']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Warna</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['warna'])){
			echo $koleksi['warna']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Teknik Pembuatan</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['teknik_pembuatan'])){
			echo $koleksi['teknik_pembuatan']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['deskripsi'])){
			echo $koleksi['deskripsi']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Sejarah</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['sejarah'])){
			echo $koleksi['sejarah']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>:</td>
		<?php
		if(!empty($koleksi['foto'])){
			$foto = base64_encode(file_get_contents($koleksi['foto']));
echo '<td><img src="data:image/jpeg;base64,'.$foto.'"></td>';;
		}else{
			echo '-';
		}
                                

?>
	</tr>
	<tr>
		<td>Kondisi</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['kondisi'])){
			echo $koleksi['kondisi']; 
		}else{
			echo '-';
		}
		
		?>
		</td>
	</tr>
	<tr>
		<td>Kode QR</td>
		<td>:</td>
		<td>

			<?php
		
                                $kode_qr = base64_encode(file_get_contents($koleksi['kode_qr']));
                                echo '<img src="data:image/jpeg;base64,'.$kode_qr.'">';
                            ?>
		</td>
	</tr>
	<tr>
		<td>Audio</td>
		<td>:</td>
		<td>
			<?php 
		if(!empty($koleksi['audio'])){
			?>
			<audio src="<?php echo $koleksi['audio']; ?>" controls="controls">
				Your browser does not support the audio element.
			</audio>
			<?php
		}else{
			echo '-';
		}
		
		?>

		</td>
	</tr>
</table>
<a href="<?php echo base_url('koleksi/ubah');?>" class="btn btn-primary">Ubah</a>
                            <a href="<?php echo base_url('koleksi/hapus');?>" class="btn btn-danger">Hapus</a>
<br>
