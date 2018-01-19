					<center><h3>Form Edit Data Majalah</h3></center>
						<div class="col-lg-2"></div>
						<div class="col-lg-8">
							<form class="form-vertical" method="post" action="" enctype="multipart/form-data">
								<div class="form-group form-float">
		    						<div class="form-line">
											<input type="text" name="idmajalah" class="form-control" value="<?php echo set_value('idmajalah', $data->row()->idmajalah) ?>" />
											<?php echo form_error('idmajalah', '<div class="error">','</div>'); ?>
											<label class="form-label" for="idmajalah">ID Majalah</label>
		    						</div>
		    					</div>
								<div class="form-group form-float">
		    						<div class="form-line">
											<input type="text" name="judulmajalah" class="form-control" value="<?php echo set_value('judulmajalah', $data->row()->judulmajalah) ?>" />
											<?php echo form_error('judulmajalah', '<div class="error">','</div>'); ?>
											<label class="form-label" for="judulmajalah">Judul Majalah</label>
		    						</div>
		    					</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="number" name="volume" class="form-control" value="<?php echo set_value('volume', $data->row()->volume) ?>" />
											<?php echo form_error('volume', '<div class="error">','</div>'); ?>
											<label for="volume" class="form-label">Volume</label>
										</div>
									</div>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="number" name="no" class="form-control" value="<?php echo set_value('no', $data->row()->no) ?>" />
											<?php echo form_error('no', '<div class="error">','</div>'); ?>
											<label for="no" class="form-label">No</label>
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
											<input type="date" name="tanggal_terima" class="form-control" value="<?php echo set_value('tanggal_terima', $data->row()->tanggal_terima) ?>" />
											<?php echo form_error('tanggal_terima', '<div class="error">','</div>'); ?>
										</div>
									</div>
									<label for="tahun_terbit">Tahun Terbit</label>
									<select name="tahun_terbit" class="form-control show-tick">
			 						<?php foreach ($tahun->result() as $row): ?>
										<?php if ($row->idtahun === $data->row()->tahun_terbit){ ?>
					 						<option value="<?php echo $data->row()->tahun_terbit ?>" selected><?php echo $data->row()->tahun ?></option>
										<?php } else{ ?>
											<option value="<?php echo $row->idtahun ?>"><?php echo $row->tahun ?></option>
			 							<?php } ?>
			 					<?php endforeach; ?>
								</select><br><br>
									<div class="form-group form-float">
										<div class="form-line">
											<input type="text" name="issn" class="form-control" value="<?php echo set_value('issn', $data->row()->issn) ?>" />
											<?php echo form_error('issn', '<div class="error">','</div>'); ?>
											<label for="issn" class="form-label">ISSN</label>
										</div><br>
									</div>
									<label for="idbahasa">Bahasa</label>
									<select name="idbahasa" class="form-control show-tick">
			 						<?php foreach ($bahasa->result() as $row): ?>
										<?php if ($row->idbahasa === $data->row()->idbahasa){ ?>
					 						<option value="<?php echo $data->row()->idbahasa ?>" selected><?php echo $data->row()->namabahasa ?></option>
										<?php } else{ ?>
											<option value="<?php echo $row->idbahasa ?>"><?php echo $row->namabahasa ?></option>
			 							<?php } ?>
			 					<?php endforeach; ?>
								</select><br><br>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="number" name="ketersediaan" class="form-control" value="<?php echo set_value('jumlah', $data->row()->ketersediaan) ?>" />
										<?php echo form_error('ketersediaan', '<div class="error">','</div>'); ?>
										<label for="ketersediaan" class="form-label">ketersediaan</label>
									</div>
								</div>
								<div class="form-group form-float">
									<div class="form-line">
										<input type="text" name="catatan" class="form-control" value="<?php echo set_value('catatan', $data->row()->catatan) ?>" />
										<?php echo form_error('catatan', '<div class="error">','</div>'); ?>
										<label for="catatan" class="form-label">catatan</label>
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
									<a href="<?php echo base_url().'majalah/detail/'.$data->row()->id ?>" class="btn bg-info">Batal</a>
								</form>
						</div>
