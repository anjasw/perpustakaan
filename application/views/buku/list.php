<h3> <center>Data Buku Perpustakaan</center></h3>

<div class="col-sm-12">
<div class="col-lg-4">
	<a href="<?php echo base_url()?>buku/add" class="btn bg-blue waves-effect">Tambah Data</a>

</div>	<div class="col-sm-4">
	</div>
	<div class="col-sm-2">
		<a href="<?php echo base_url()?>buku/export?field=<?php echo $this->input->get('field') ?>&q=<?php echo $this->input->get('q')?>" class="btn bg-blue waves-effect">Print Out Data</a>
	</div>
	<div class="col-sm-2">
		<a href="<?php echo base_url()?>buku/exportsemua" class="btn bg-blue waves-effect">Print Out Semua Data</a>
	</div>
</div><br>
<div class="row">
	<div class="col-lg-6">
		<form action="" method="get">
			<div class="row clearfix">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="form-group">
								<div class="form-line">
									<input type="text" name="" value="Tahun Terbit" class="form-control" readonly>
								</div>
						</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="form-group">
								<div class="form-line">
									<select class="form-control" name="tahun_terbit">
										<?php foreach ($option->result() as $tahun): ?>
											<option value="<?php echo $tahun->idtahun ?>"><?php echo $tahun->tahun ?></option>
										<?php endforeach; ?>
									</select>
								</div>
						</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<div class="form-group">
							<div class="form-line">
								<select class="form-control" name="tahun_terbit1">
									<?php foreach ($option->result() as $tahun): ?>
										<option value="<?php echo $tahun->idtahun ?>"><?php echo $tahun->tahun ?></option>
									<?php endforeach; ?>
								</select>
							</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Search</button>
				</div>
		</div>
		</form>
	</div>
	<div class="col-lg-6">
		<form action="" method="get">
			<div class="row clearfix">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
								<div class="form-line">
									<select class="form-control" name="field">
										<option value="judulbuku">Judul Buku</option>
										<option value="tahun">Tahun Terbit</option>
									</select>
								</div>
						</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
						<div class="form-group">
								<div class="form-line">
										<input type="text" name="q" class="form-control" value="<?php echo $this->input->get('q')?>">
								</div>
						</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<button type="submit" class="btn btn-primary btn-lg m-l-15 waves-effect">Search</button>
				</div>
		</div>
		</form>
	</div>
</div>

	<?php
	if ($this->session->flashdata('insertstatus') == 'true') {
		echo "<div class='success'> Data Berhasil disimpan</div>";
	}else if ($this->session->flashdata('insertstatus') == 'false') {
		echo "<div class='error'> Data Gagal disimpan</div>";
	}
	if ($this->session->flashdata('deletestatus') == 'true') {
		echo "<div class='success'> Data Berhasil dihapus</div>";
	}else if ($this->session->flashdata('deletestatus') == 'false') {
		echo "<div class='error'> Data Gagal dihapus</div>";
	}
	?>
	<table class="table table-bordered table-hover js-basic-example ">
		<thead>
			<tr>
				<th class="col-lg-2">ID Buku</th>
				<th class="col-sm-2">Sampul</th>
				<th class="col-sm-2">Judul</th>
				<th class="col-sm-2">Penulis</th>
				<th class="col-sm-2">Editor</th>
				<th class="col-sm-2">Bahasa</th>
				<th>Tahun</th>
				<th>Opsi</th>
			</tr>
		</thead>
		<tbody>
		<?php
			if($data->num_rows()>0) {
				//$n = 1;
				foreach ($data->result() as $row ){
				echo"
					<tr>
						<td>$row->idbuku</td>
						<td><img src='".base_url()."assets/images/$row->sampul' width='100' height='100' /></td>
						<td>$row->judulbuku</td>
						<td>$row->namapenulis</td>
						<td>$row->ideditor , $row->ideditor02, $row->ideditor03</td>
						<td>$row->namabahasa</td>
						<td>$row->tahun</td>
						<td><a href='".base_url()."buku/detail/$row->id' class='btn bg-blue waves-effect'>Detail</a><br>
						<a onclick='return is_delete()' href='".base_url()."buku/delete/$row->id' class='btn bg-red waves-effect'>Hapus</a>
						<a onclick='return is_delete()' href='".base_url()."buku/hapuspenerbit/$row->penerbit' class='btn bg-green waves-effect'>Delete Penerbit</a><br>
						</td>
					</tr>
					";
				//$n++;
				}
			}
		?>
		</tbody>
</table>

<nav class="text-center">
	<ul class="pagination">
		<?php echo $pagging->create_links() ?>
	</ul>
</nav>
<script type="text/javascript">
	function is_delete(){
		return confirm('Yakin Dihapus ? ');
	}
</script>
