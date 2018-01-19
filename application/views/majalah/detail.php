<div class="row">
  <div class="col-lg-6">
    <img src="<?php echo base_url().'assets/images/'.$data->row()->sampul ?>" width="100%">
  </div>
  <div class="col-lg-6">
    <center><h3>Detail Majalah</h3></center><br><br>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Judul Majalah</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->judulmajalah ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Volume</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->volume ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">no</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->no ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Tahun Terbit</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->tahun ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Kota Terbit</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->kota_terbit ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Penerbit</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->penerbit ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">ISSN</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->issn ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Bahasa</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->namabahasa ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Ketersediaan</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->ketersediaan ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Catatan</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->catatan ?></div>
    </div>
    <br>
    <a href="<?php echo base_url().'majalah/edit/'.$data->row()->id ?>"><button class="btn btn-lg btn-block bg-red"> Edit </button></a><br>
    <a href="<?php echo base_url() ?>majalah"><button class="btn btn-block btn-lg bg-red"> < < Back </button></a>
  </div>
</div>
