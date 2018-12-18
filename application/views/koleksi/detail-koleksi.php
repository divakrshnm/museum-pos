
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
			<?php echo $koleksi['tanggal_masuk']; ?>
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
			<?php echo $koleksi['daerah_asal']; ?>
		</td>
	</tr>
	<tr>
		<td>Tanggal Pembuatan</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['tanggal_pembuatan']; ?>
		</td>
	</tr>
	<tr>
		<td>Tanggal Pemakaian</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['tanggal_pemakaian']; ?>
		</td>
	</tr>
	<tr>
		<td>Bentuk</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['bentuk']; ?>
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
			<?php echo $koleksi['ukuran']; ?>
		</td>
	</tr>
	<tr>
		<td>Bahan</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['bahan']; ?>
		</td>
	</tr>
	<tr>
		<td>Warna</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['warna']; ?>
		</td>
	</tr>
	<tr>
		<td>Teknik Pembuatan</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['teknik_pembuatan']; ?>
		</td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['deskripsi']; ?>
		</td>
	</tr>
	<tr>
		<td>Sejarah</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['sejarah']; ?>
		</td>
	</tr>
	<tr>
		<td>Foto</td>
		<td>:</td>
		<?php
$foto = base64_encode(file_get_contents($koleksi['foto']));
echo '<td><img src="data:image/jpeg;base64,'.$foto.'"></td>';
?>
	</tr>
	<tr>
		<td>Kondisi</td>
		<td>:</td>
		<td>
			<?php echo $koleksi['kondisi']; ?>
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
			<audio src="<?php echo $koleksi['audio']; ?>" controls="controls">
				Your browser does not support the audio element.
			</audio>
		</td>
	</tr>
</table>
<br>
