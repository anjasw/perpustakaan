<center><h3>Form Tambah Data Buku</h3></center>
<form class="form-vertical col-lg-6" method="post" action="" enctype="multipart/form-data">
	<div class="form-group form-float">
  	<div class="form-line">
		<input type="text" name="idbuku" class="form-control" value="B-" />
		<?php echo form_error('idbuku', '<div class="error">','</div>'); ?>
		<label class="form-label" for="idbuku">ID Buku</label>
  	</div>
  </div>
	<div class="form-group form-float">
  	<div class="form-line">
		<input type="text" name="judulbuku" class="form-control" value="<?php echo set_value('judulbuku') ?>" />
		<?php echo form_error('judulbuku', '<div class="error">','</div>'); ?>
		<label class="form-label" for="judulbuku">Judul Buku</label>
  	</div>
  </div>
	<div class="form-group form-float">
		<div class="form-line">
			<input type="number" name="edisi" class="form-control" value="<?php echo set_value('edisi') ?>" />
			<?php echo form_error('edisi', '<div class="error">','</div>'); ?>
			<label for="edisi" class="form-label">Edisi</label>
		</div>
	</div>
	<label for="idpenulis">Penulis</label>
		<select name="idpenulis" class="form-control show-tick">
			<?php foreach ($penulis->result() as $data): ?>
				<option value="<?php echo $data->idpenulis ?>"><?php echo $data->namapenulis ?></option>
			<?php endforeach; ?>
		</select><br><br>
		<button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#penulis">Tambah Penulis</button>
<br><br>
<div class="form-group form-float">
	<div class="form-line">
		<label for="ideditor" class="form-label">Editor 1</label>
		<input type="text" name="ideditor" value="" class="form-control">
	</div>
</div>
<div class="form-group form-float">
	<div class="form-line">
		<label for="ideditor2" class="form-label">Editor 2</label>
		<input type="text" name="ideditor2" value="" class="form-control">
	</div>
</div>
<div class="form-group form-float">
	<div class="form-line">
		<label for="ideditor3" class="form-label">Editor 3</label>
		<input type="text" name="ideditor3" value="" class="form-control">
	</div>
</div>

	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" name="subyek" class="form-control" value="<?php echo set_value('subyek') ?>" />
			<?php echo form_error('subyek', '<div class="error">','</div>'); ?>
			<label for="subyek"  class="form-label">Subyek</label>
		</div>
	</div>
	<div class="form-group form-float">
		<input type="text" name="kota_terbit" class="form-control" value="<?php echo set_value('kota_terbit') ?>" />
		<div class="form-line">
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
			<input type="date" name="tanggal_diterima" class="form-control" value="<?php echo set_value('tanggal_diterima') ?>" />
			<?php echo form_error('tanggal_diterima', '<div class="error">','</div>'); ?>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<label for="thn_terbit">Tahun Terbit</label>
		</div>
		<div class="col-lg-1">
			:
		</div>
		<div class="col-lg-5">
			<select name="thn_terbit">
				<?php foreach ($tahun->result() as $a): ?>
					<option value="<?php echo $a->idtahun ?>"><?php echo $a->tahun ?></option>
				<?php endforeach; ?>
			</select>
		<br><br>
		</div>
	</div>

	<div class="form-group form-float">
		<div class="form-line">
			<input type="text" name="isbn" class="form-control" value="<?php echo set_value('isbn') ?>" />
			<?php echo form_error('isbn', '<div class="error">','</div>'); ?>
			<label for="isbn" class="form-label">ISBN</label>
		</div><br>
	</div>

	<div class="row">
		<div class="col-lg-3">
			<label for="idbahasa">Bahasa</label>
		</div>
		<div class="col-lg-1">
			:
		</div>
		<div class="col-lg-5">
			<select name="idbahasa">
				<?php foreach ($bahasa->result() as $data): ?>
					<option value="<?php echo $data->idbahasa ?>"><?php echo $data->namabahasa ?></option>
				<?php endforeach; ?>
			</select><br><br>

		</div>
	</div>
		<button type="button" class="btn btn-danger waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Bahasa</button>
<br><br>
<div class="row">

	<div class="col-lg-3">

			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="jumlah" class="form-control" value="<?php echo set_value('jumlah') ?>" />
					<?php echo form_error('jumlah', '<div class="error">','</div>'); ?>
					<label for="jumlah" class="form-label">Jumlah</label>
				</div>
			</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-4">

			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="jumlah_halaman" class="form-control" value="<?php echo set_value('jumlah_halaman') ?>" />
					<?php echo form_error('jumlah_halaman', '<div class="error">','</div>'); ?>
					<label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
				</div>
			</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-5">

			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="no_klasifikasi" class="form-control" value="B-" />
					<?php echo form_error('no_klasifikasi', '<div class="error">','</div>'); ?>
					<label for="no_klasifikasi" class="form-label">No Klasifikasi</label>
				</div>
			</div>
	</div>
</div>



	<input type="file" name="images" id="input-file-now-custom-2" class="dropify"><br>
	<button type="submit" class="btn btn-danger">Simpan</button>
	<a href="<?php echo base_url() ?>buku" class="btn btn-info">Batal</a>
</form>
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
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
<div class="modal fade" id="penulis" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Tambah Penulis</h4>
            </div>
            <div class="modal-body">
							<?php echo form_open("buku/penulis"); ?>
							<div class="form-group form-float">
								<div class="form-line">
									<input type="text" name="namapenulis" class="form-control" value="<?php echo set_value('namapenulis') ?>" />
									<?php echo form_error('namapenulis', '<div class="error">','</div>'); ?>
									<label for="namapenulis" class="form-label">Penulis</label>
								</div>
							</div>
							<button type="submit" class="btn btn-link waves-effect">SAVE CHANGES</button>
							<button class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>

							<?php echo form_close(); ?>
	          </div>
        </div>
    </div>
</div>  </div>
    </div>
</div>
