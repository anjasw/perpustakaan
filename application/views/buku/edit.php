<center><h3>Form Tambah Data Buku</h3></center>
<div class="row">
	<div class="col-lg-2"></div>
	<div class="col-lg-8">
		<form class="form-vertical" method="post" action="" enctype="multipart/form-data">
			<div class="form-group form-float">
		    	<div class="form-line">
					<input type="text" name="judulbuku" class="form-control" value="<?php echo set_value('judulbuku', $data->row()->judulbuku) ?>" />
					<?php echo form_error('judulbuku', '<div class="error">','</div>'); ?>
					<label class="form-label" for="judulbuku">Judul Buku</label>
		    	</div>
		    </div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="text" name="edisi" class="form-control" value="<?php echo set_value('edisi', $data->row()->edisi) ?>" />
					<?php echo form_error('edisi', '<div class="error">','</div>'); ?>
					<label for="edisi" class="form-label">Edisi</label>
				</div>
			</div>

			<label for="idpenulis">Penulis</label>
			<select name="idpenulis" class="form-control show-tick">
			<?php foreach ($penulis->result() as $row): ?>
				<?php if ($row->idpenulis === $data->row()->idpenulis){ ?>
					<option value="<?php echo $data->row()->idpenulis ?>" selected><?php echo $data->row()->namapenulis ?></option>
				<?php } else{ ?>
				<?php } ?>
				<option value="<?php echo $row->idpenulis ?>"><?php echo $row->namapenulis ?></option>
			<?php endforeach; ?>
			</select><br><br>


			<label for="ideditor">Editor 1</label>
				<input type="text" name="ideditor" value="<?php echo $row->ideditor ?>" class="form-control">

			<label for="ideditor2">Editor 2</label>
			<input type="text" name="ideditor2" value="<?php echo $row->ideditor02 ?>" class="form-control">

			<label for="ideditor3">Editor 3</label>
			<input type="text" name="ideditor3" value="<?php echo $row->ideditor03 ?>" class="form-control">
<br><br>


			<div class="form-group form-float">
				<div class="form-line">
					<input type="text" name="subyek" class="form-control" value="<?php echo set_value('subyek', $data->row()->subyek) ?>" />
					<?php echo form_error('subyek', '<div class="error">','</div>'); ?>
					<label for="subyek"  class="form-label">Subyek</label>
				</div>
			</div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="text" name="kota_terbit" class="form-control" value="<?php echo set_value('kota_terbit', $data->row()->kota_terbit) ?>" />
					<?php echo form_error('kota_terbit', '<div class="error">','</div>'); ?>
					<label for="kota_terbit" class="form-label">Kota Terbit</label>
				</div>
			</div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="text" name="penerbit" class="form-control" value="<?php echo set_value('penerbit', $data->row()->penerbit) ?>" />
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
			<div class="form-group form-float">
				<div class="form-line">
					<label for="thn_terbit">Tahun Terbit</label>
					<input type="date" name="thn_terbit" class="form-control" value="<?php echo set_value('thn_terbit', $data->row()->thn_terbit) ?>" />
					<?php echo form_error('thn_terbit', '<div class="error">','</div>'); ?>
				</div>
			</div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="text" name="isbn" class="form-control" value="<?php echo set_value('isbn', $data->row()->isbn) ?>" />
					<?php echo form_error('isbn', '<div class="error">','</div>'); ?>
					<label for="isbn" class="form-label">ISBN</label>
				</div><br>
			</div>
			<label for="idbahasa">Bahasa</label>
			<select name="idbahasa" class="form-control show-tick">
			 <?php foreach ($bahasa->result() as $row): ?>
					<?php if ($row->idbahasa === $data->row()->idbahasa){ ?>
					 	<option value="<?php echo $data->row()->idbahasa ?>" selected><? echo $data->row()->namabahasa ?></option>
					<? } else{ ?>
						<option value="<?php echo $row->idbahasa ?>"><? echo $row->namabahasa ?></option>
			 		<? } ?>
			 <?php endforeach; ?>
			</select><br><br>
			<br><br>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="jumlah" class="form-control" value="<?php echo set_value('jumlah', $data->row()->jumlah) ?>" />
					<?php echo form_error('jumlah', '<div class="error">','</div>'); ?>
					<label for="jumlah" class="form-label">Jumlah</label>
				</div>
			</div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="jumlah_halaman" class="form-control" value="<?php echo set_value('jumlah_halaman', $data->row()->jumlah_halaman) ?>" />
					<?php echo form_error('jumlah_halaman', '<div class="error">','</div>'); ?>
					<label for="jumlah_halaman" class="form-label">Jumlah Halaman</label>
				</div>
			</div>
			<div class="form-group form-float">
				<div class="form-line">
					<input type="number" name="no_klasifikasi" class="form-control" value="<?php echo set_value('no_klasifikasi', $data->row()->jumlah_halaman) ?>" />
					<?php echo form_error('no_klasifikasi', '<div class="error">','</div>'); ?>
					<label for="no_klasifikasi" class="form-label">No Klasifikasi</label>
				</div>
			</div>
			<?php
				if ($this->session->flashdata('insertstatus') == 'true') {
					echo "<div class='success'> Data Berhasil disimpan</div>";
				}else if ($this->session->flashdata('insertstatus') == 'false') {
					echo "<div class='error'> Data Gagal disimpan</div>";
				}else if ($this->session->flashdata('insertstatus') == 'salah') {
					echo "<div class='error'> Data salah disimpan</div>";
				}
			?>
			<input type="file" name="images"><br>
			<button type="submit" class="btn bg-red">Simpan</button>
			<a href="<?php echo base_url().'buku/detail/'.$data->row()->id ?>" class="btn bg-info">Batal</a>
		</form>
	</div>
</div>
