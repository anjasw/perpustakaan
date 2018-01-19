<div class="row">
  <div class="col-lg-6">
    <img src="<? echo base_url().'assets/images/'.$data->row()->sampul ?>" width="100%">
  </div>
  <div class="col-lg-6">
    <center><h3>Detail Buku</h3></center><br><br>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Judul Buku</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->judulbuku ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Edisi</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->edisi ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Penulis</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->namapenulis ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Editor</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5">
      <?php
        echo $data->row()->ideditor;
        if ($data->row()->ideditor02 != '') {
            echo ", ".$data->row()->ideditor02;
          }else{
            echo " ";
          }

          if ($data->row()->ideditor03 != '') {
            echo ", ".$data->row()->ideditor03;
          }else{
            echo " ";
          }
      ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Subyek</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->subyek ?></div>
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
      <div class="col-lg-3">Tahun Terbit</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->thn_terbit ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">ISBN</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->isbn ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Bahasa</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->namabahasa ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Jumlah Buku</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->jumlah ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">Jumlah Halaman</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->jumlah_halaman ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">No Klasifikasi</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->no_klasifikasi ?></div>
    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class="col-lg-3">No Klasifikasi</div>
      <div class="col-lg-1">:</div>
      <div class="col-lg-5"><?= $data->row()->tanggal_diterima ?></div>
    </div>
    <br>
    <a href="<? echo base_url().'buku/edit/'.$data->row()->id ?>"><button class="btn btn-lg btn-block bg-red"> Edit </button></a><br>
    <a href="<? echo base_url() ?>buku"><button class="btn btn-block btn-lg bg-red"> < < Back </button></a>
  </div>
</div>
