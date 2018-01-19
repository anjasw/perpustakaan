<center><h3>Form Tambah Data Majalah</h3></center>
<form class="form-vertical col-lg-6" method="post" action="" enctype="multipart/form-data">
	<div class="form-group form-float">
  	<div class="form-line">
		<input type="text" name="idmajalah" class="form-control" value="M-" />
		<?php echo form_error('idmajalah', '<div class="error">','</div>'); ?>
		<label class="form-label" for="idmajalah">ID Majalah</label>
  	</div>
  </div>
	<div class="form-group form-float">
  	<div class="form-line">
		<input type="text" name="judulmajalah" class="form-control" value="<?php echo set_value('judulmajalah') ?>" />
		<?php echo form_error('judulmajalah', '<div class="error">','</div>'); ?>
		<label class="form-label" for="judulmajalah">Judul Majalah</label>
  	</div>
  </div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="number" name="volume" class="form-control" value="<?php echo set_value('volume') ?>" />
			<?php echo form_error('volume', '<div class="error">','</div>'); ?>
			<label for="volume" class="form-label">Volume</label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="number" name="no" class="form-control" value="<?php echo set_value('no') ?>" />
			<?php echo form_error('no', '<div class="error">','</div>'); ?>
			<label for="no" class="form-label">No</label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" name="kota_terbit" class="form-control" value="<?php echo set_value('kota_terbit') ?>" />
			<?php echo form_error('kota_terbit', '<div class="error">','</div>'); ?>
			<label for="kota_terbit" class="form-label">Kota Terbit</label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" name="penerbit" class="form-control" value="<?php echo set_value('penerbit') ?>" />
			<?php echo form_error('penerbit', '<div class="error">','</div>'); ?>
			<label for="penerbit" class="form-label">Penerbit</label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<label for="tanggal_terima">Tanggal Terima</label>
			<input type="date" name="tanggal_terima" class="form-control" value="<?php echo set_value('tanggal_terima') ?>" />
			<?php echo form_error('tanggal_terima', '<div class="error">','</div>'); ?>
		</div>
	</div>
<div class="row">
	<div class="col-lg-3">
		<label for="tahun_terbit">Tahun Terbit</label>
	</div>
	<div class="col-lg-1">
		:
	</div>
	<div class="col-lg-5">
			<select name="tahun_terbit">
				<option>- - Nothing selected - -</option>
				<?php foreach ($tahun->result() as $t): ?>
					<option value="<?php echo $t->idtahun ?>"><?php echo $t->tahun ?></option>
				<?php endforeach; ?>
			</select>
	</div>
</div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" name="issn" class="form-control" value="<?php echo set_value('issn') ?>" />
			<?php echo form_error('issn', '<div class="error">','</div>'); ?>
			<label for="issn" class="form-label">ISSN</label>
		</div><br>
	</div>
	<label for="idbahasa">Bahasa</label>
		<select name="idbahasa" class="form-control show-tick">
			<?php foreach ($bahasa->result() as $data): ?>
				<option value="<?= $data->idbahasa ?>"><?= $data->namabahasa ?></option>
			<?php endforeach; ?>
		</select><br><br>

		<button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Bahasa</button>
<br><br>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="number" name="ketersediaan" class="form-control" value="<?php echo set_value('ketersediaan') ?>" />
			<?php echo form_error('ketersediaan', '<div class="error">','</div>'); ?>
			<label for="ketersediaan" class="form-label">Jumlah<no_klasifikasi/label>
		</div>
	</div>
	<div class="form-group form-float">
		<div class="form-line">
			<textarea class="form-control" name="catatan" rows="8" cols="80">
			</textarea>
			<?php echo form_error('catatan', '<div class="error">','</div>'); ?>
			<label for="catatan" class="form-label">Catatan</label>
		</div>
	</div>
	<input type="file" name="images" id="input-file-now-custom-2" class="dropify"><br>
	<button type="submit" class="btn btn-danger">Simpan</button>
	<a href="<?php echo base_url() ?>majalah" class="btn btn-info">Batal</a>
</form>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah Bahasa</h4>
            </div>
            <div class="modal-body">
							<?php echo form_open("buku/bahasa"); ?>
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" name="namabahasa" class="form-control" value="<?php echo set_value('namabahasa') ?>" />
									<?php echo form_error('namabahasa', '<div class="error">','</div>'); ?>
									<label for="namabahasa" class="form-label">Bahasa</label>
								</div>
							</div>
							<button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
							<button class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
							<?php echo form_close(); ?>
	          </div>
        </div>
    </div>
</div>
