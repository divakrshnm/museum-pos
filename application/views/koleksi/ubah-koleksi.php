<div class="row">
	<div class="col-lg-12">
		<form action="<?php echo base_url().'koleksi/tambah-proses'; ?>" method="post" enctype="multipart/form-data" role="form">
			<div class="col-lg-6">
				<div class="form-group<?php if(form_error('nama_koleksi') != null){echo ' has-error';}?>">
					<label class="control-label<?php if(form_error('nama_koleksi') != null){echo ' for=" inputError"';}?>">Nama
						Koleksi *</label>
					<input type="text" name="nama_koleksi" value="<?php if(isset($nama_koleksi)){echo $nama_koleksi;} ?>" class="form-control"
					 <?php if(form_error('nama_koleksi') !=null){echo ' id="inputError"' ;}?>>
					<?php 
                        if(form_error('nama_koleksi') != null){
                            echo form_error('nama_koleksi', '<p class="text-danger">', '</p>');
                        }
                    ?>
				</div>
				<div class="form-group<?php if(form_error('jenis') != null){echo ' has-error';}?>" style="margin-bottom:27px;">
					<label class="control-label<?php if(form_error('jenis') != null){echo ' for=" inputError"';}?>">Jenis Koleksi *</label><br>
					<label class="radio-inline">
						<input type="radio" name="jenis" id="optionsRadiosInline1" value="peralatan" <?php if(isset($jenis) && $jenis=='peralatan'
						 ){echo 'checked' ;} ?>> Peralatan
					</label>
					<label class="radio-inline">
						<input type="radio" name="jenis" id="optionsRadiosInline2" value="filateli" <?php if(isset($jenis) && $jenis=='filateli'
						 ){echo 'checked' ;} ?>> Filateli
					</label>
					<?php 
                        if(form_error('jenis') != null){
                            echo form_error('jenis', '<p class="text-danger">', '</p>');
                        }
                    ?>
				</div>
				<div class="form-group">
					<label class="control-label">Tanggal Pembuatan</label>
					<input type="date" name="tanggal_pembuatan" value="<?php if(isset($tanggal_pembuatan)){echo $tanggal_pembuatan;} ?>"
					 class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Bentuk</label>
					<input type="text" name="bentuk" value="<?php if(isset($bentuk)){echo $bentuk;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Nilai</label>
					<input type="text" name="nilai" value="<?php if(isset($nilai)){echo $nilai;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Bahan</label>
					<input type="text" name="bahan" value="<?php if(isset($bahan)){echo $bahan;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Teknik Pembuatan</label>
					<input type="text" name="teknik_pembuatan" value="<?php if(isset($teknik_pembuatan)){echo $teknik_pembuatan;} ?>"
					 class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Deskripsi</label>
					<textarea class="form-control" rows="3" name="deskripsi"><?php if(isset($deskripsi)){echo $deskripsi;} ?></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Foto</label>
					<input type="file" name="foto" value="<?php if(isset($foto)){echo $foto;} ?>">
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group<?php if(form_error('tanggal_masuk') != null){echo ' has-error';}?>">
					<label class="control-label<?php if(form_error('tanggal_masuk') != null){echo ' for=" inputError"';}?>">Tanggal
						Masuk *</label>
					<input type="date" name="tanggal_masuk" value="<?php if(isset($tanggal_masuk)){echo $tanggal_masuk;} ?>" class="form-control"
					 <?php if(form_error('tanggal_masuk') !=null){echo ' id="inputError"' ;}?>>
					<?php 
                        if(form_error('tanggal_masuk') != null){
                            echo form_error('tanggal_masuk', '<p class="text-danger">', '</p>');
                        }
                    ?>
				</div>
				<div class="form-group">
					<label class="control-label">Daerah Asal</label>
					<input type="text" name="daerah_asal" value="<?php if(isset($daerah_asal)){echo $daerah_asal;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Tanggal Pemakaian</label>
					<input type="date" name="tanggal_pemakaian" value="<?php if(isset($tanggal_pemakaian)){echo $tanggal_pemakaian;} ?>"
					 class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Banyaknya</label>
					<input type="text" name="banyaknya" value="<?php if(isset($banyaknya)){echo $banyaknya;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Ukuran</label>
					<input type="text" name="ukuran" value="<?php if(isset($ukuran)){echo $ukuran;} ?>" class="form-control">
				</div>
				<div class="form-group">
					<label class="control-label">Warna</label>
					<input type="text" name="warna" value="<?php if(isset($warna)){echo $warna;} ?>" class="form-control">
				</div>
				<div class="form-group" style="margin-bottom:27px;">
					<label class="control-label">Audio</label>
					<input type="file" id="audio" name="audio">
				</div>
				<div class="form-group">
					<label class="control-label">Sejarah</label>
					<textarea class="form-control" rows="3" name="sejarah"><?php if(isset($sejarah)){echo $sejarah;} ?></textarea>
				</div>
				<div class="form-group">
					<label class="control-label">Kondisi</label>
					<textarea class="form-control" rows="3" name="kondisi"><?php if(isset($kondisi)){echo $kondisi;} ?></textarea>
				</div>
                
			</div>
            <div class="col-lg-12">
            <div class="form-group text-right">
                <input type="submit" value="Tambah" class="btn btn-primary">
				</div>
                </div>
			
		</form>
	</div>
</div>
