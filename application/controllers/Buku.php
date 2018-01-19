<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Buku_model','bm');
		if(!$this->session->userdata('loginsess')){
			redirect('login');
		}
		$this->load->library('pagination');

	}

	function index($offset = 0){
		$view['view'] = 'buku/list';
		//$view['data'] = $this->mm->get_majalah();
		$q = $this->input->get('q');
		$field = $this->input->get('field');
		$tahun = $this->input->get('tahun_terbit');
		$tahun1 = $this->input->get('tahun_terbit1');
		$view['option'] = $this->db->get('tahunmajalah');
		$view['data'] = $this->bm->get_buku(false, $offset, $q, $field,$tahun, $tahun1);
		$buku = $this->bm->get_buku(false, -1, $q, $field);
		$config['base_url'] = base_url().'buku/index';
		$config['total_rows'] =$buku->num_rows();
		$config['per_page'] = 3;
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
		$config['cur_tag_close'] = '</a></li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['anchor_class'] = 'class="waves-effect"';
		$view['pagging'] =$this->pagination->initialize($config);

		$this->load->view('template',$view);
	}
	public function hapuspenerbit($id){
		if ($this->bm->deletebukupenerbit($id)) {
			$this->session->set_flashdata('deletestatus', 'true');
			redirect('buku');
        }else{
			$this->session->set_flashdata('deletestatus', 'false');
			redirect('buku');
		}
	}
	function add(){
		$view['user'] = $this->session->userdata('loginsess');
		$view['view'] = 'buku/add';
		$view['bahasa'] = $this->db->get('tbl_bahasa');
		$view['penulis'] = $this->db->get('tbl_penulis');
		$view['editor'] = $this->db->get('tbl_editor');
		$view['tahun'] = $this->db->get('tahunbuku');
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$this->form_validation->set_rules('idbuku', 'ID Buku', 'required|max_length[8]');
			$this->form_validation->set_rules('judulbuku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('edisi', 'Edisi', 'required|max_length[2]');
			//$this->form_validation->set_rules('subyek', 'Subyek', 'required');
			//$this->form_validation->set_rules('isbn', 'ISBN', 'required|max_length[15]');
			$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required|is_numeric|max_length[6]');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|is_numeric');
			//$this->form_validation->set_rules('kota_terbit', 'Kota Terbit', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|max_length[4]|is_numeric');
			//$this->form_validation->set_rules('no_klasifikasi', 'No Klasifikasi', 'required|is_numeric');
			$this->form_validation->set_rules('tanggal_terima', 'Tanggal Terima', 'max_length[15]');

			if ($this->form_validation->run() == TRUE){
			  $data['idbuku'] = $this->input->post('idbuku');
			  $data['judulbuku'] = $this->input->post('judulbuku');
			  $data['idbahasa'] = $this->input->post('idbahasa');
			  $data['edisi'] = $this->input->post('edisi');
			  $data['idpenulis'] = $this->input->post('idpenulis');
			  $data['subyek'] = $this->input->post('subyek');
			  $data['ideditor'] = $this->input->post('ideditor');
				$data['ideditor02'] = $this->input->post('ideditor2');
				$data['ideditor03'] = $this->input->post('ideditor3');

			  $data['isbn'] = $this->input->post('isbn');
			  $data['jumlah'] = $this->input->post('jumlah');
			  $data['jumlah_halaman'] = $this->input->post('jumlah_halaman');
			  $data['kota_terbit'] = $this->input->post('kota_terbit');
			  $data['penerbit'] = $this->input->post('penerbit');
				$data['thn_terbit'] = $this->input->post('thn_terbit');
				$data['no_klasifikasi'] = $this->input->post('no_klasifikasi');
				$data['tanggal_diterima'] = $this->input->post('tanggal_diterima');

				$lokasi = './assets/images/';
				$abspath = date('YmdHis').'_'.strtolower(str_replace(array(" ", ",","-", "&"), "_", $_FILES['images']['name']));
				$tmp_name = $_FILES["images"]["tmp_name"];
							if (move_uploaded_file($tmp_name, $lokasi.$abspath)) {
								$data['sampul'] = $abspath;
							}else{
								$this->session->set_flashdata('insertstatus', 'false');
								redirect('buku/add');
							}



				if($this->bm->add_buku($data)) {
        	$this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
         	redirect('buku');
      }
		}
		$this->load->view('template',$view);
	}

	function edit($id){
		$view['view'] = 'buku/edit';
		$view['data'] = $this->bm->get_buku($id);
		$view['bahasa'] = $this->db->get('tbl_bahasa');
		$view['editor'] = $this->db->get('tbl_editor');
		$view['penulis'] = $this->db->get('tbl_penulis');
		$view['tahun'] = $this->db->get('tahunbuku');
		if ($view['data']->num_rows()==0) {
			redirect('buku');
		}
		if($_SERVER['REQUEST_METHOD']==='POST'){
			//$this->form_validation->set_rules('idbuku', 'ID Buku', 'required|max_length[8]');
			$this->form_validation->set_rules('judulbuku', 'Judul Buku', 'required');
			$this->form_validation->set_rules('edisi', 'Edisi', 'required|max_length[2]');
			//$this->form_validation->set_rules('subyek', 'Subyek', 'required');
			//$this->form_validation->set_rules('isbn', 'ISBN', 'required|max_length[15]');
			$this->form_validation->set_rules('jumlah_halaman', 'Jumlah Halaman', 'required|is_numeric|max_length[6]');
			$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|is_numeric');
			//$this->form_validation->set_rules('kota_terbit', 'Kota Terbit', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('thn_terbit', 'Tahun Terbit', 'required|max_length[4]|is_numeric');
			//$this->form_validation->set_rules('no_klasifikasi', 'No Klasifikasi', 'required|is_numeric');
			$this->form_validation->set_rules('tanggal_terima', 'Tanggal Terima', 'max_length[15]');

			if($this->form_validation->run() == TRUE){
				$data['judulbuku'] = $this->input->post('judulbuku');
			  $data['idbahasa'] = $this->input->post('idbahasa');
			  $data['edisi'] = $this->input->post('edisi');
			  $data['idpenulis'] = $this->input->post('idpenulis');
			  $data['subyek'] = $this->input->post('subyek');
			  $data['ideditor'] = $this->input->post('ideditor');
				$data['ideditor02'] = $this->input->post('ideditor2');
				$data['ideditor03'] = $this->input->post('ideditor3');

			  $data['isbn'] = $this->input->post('isbn');
			  $data['jumlah'] = $this->input->post('jumlah');
			  $data['jumlah_halaman'] = $this->input->post('jumlah_halaman');
			  $data['kota_terbit'] = $this->input->post('kota_terbit');
			  $data['penerbit'] = $this->input->post('penerbit');
				$data['thn_terbit'] = $this->input->post('thn_terbit');
				$data['no_klasifikasi'] = $this->input->post('no_klasifikasi');
				$data['tanggal_diterima'] = $this->input->post('tanggal_diterima');

				$basepath = './assets/images/';
				$abspath = date('YmdHis').'_'.strtolower(str_replace(array(" ", ",","-", "&"), "_", $_FILES['images']['name']));
				if(!empty($_FILES['images']['name'])) {
					if(move_uploaded_file($_FILES["images"]["tmp_name"], $basepath.$abspath)) {
						$data['sampul'] = $abspath;
					}else{
						$this->session->set_flashdata('insertstatus', 'false');
						redirect('buku');
					}
				}

        if($this->bm->edit_buku($id,$data)) {
          $this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
          redirect('buku');
      }
		}
		$this->load->view('template',$view);
	}

	public function detail($id){
		$view['view'] = 'buku/detail';
		$view['data'] = $this->bm->get_buku($id);
		if ($view['data']->num_rows()==0) {
			redirect('buku');
		}
		$this->load->view('template',$view);
	}

	function delete($id){
		if ($this->bm->delete_buku($id)) {
			$this->session->set_flashdata('deletestatus', 'true');
			redirect('buku');
        }else{
			$this->session->set_flashdata('deletestatus', 'false');
			redirect('buku');
		}
	}

	public function bahasa(){
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$this->form_validation->set_rules('namabahasa', 'Bahasa', 'required|is_unique[tbl_bahasa.namabahasa]');
			if($this->form_validation->run() == TRUE){
				$data['namabahasa'] = $this->input->post('namabahasa');
				if ($this->bm->add_bahasa($data)) {
        	$this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
      	redirect('buku');
			}else{
				$this->session->set_flashdata('insertstatus', 'unique');
				redirect('buku/add');
			}
		}else{
			redirect('buku');
		}
	}

	public function penulis(){
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$this->form_validation->set_rules('namapenulis', 'Penulis', 'required|is_unique[tbl_penulis.namapenulis]');
			if($this->form_validation->run() == TRUE){
				$data['namapenulis'] = $this->input->post('namapenulis');
				if ($this->bm->add_penulis($data)) {
        	$this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
      	redirect('buku/add');
			}else{
				$this->session->set_flashdata('insertstatus', 'unique');
				redirect('buku/add');
			}
		}else{
			redirect('buku');
		}
	}


	function export($offset = 0){
		$this->load->library('fpdf/Fpdf');
		$field = $this->input->get('field');
		$q = $this->input->get('q');
		$tahun = $this->input->get('tahun_terbit');
		$tahun1 = $this->input->get('tahun_terbit1');

		$buku = $this->bm->get_buku(false, $offset, $q, $field, $tahun, $tahun1);
		//$buku = $this->bm->get_buku();
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->SetMargins(10,10,10);
		$pdf->AddPage();
		$pdf->SetFont('Arial',"B", 14);
		$pdf->Cell(0,4,'Data Buku Perpustakaan',0,1,'C');
		$pdf->Ln(7);
		$pdf->SetFont('Arial',"B", 8);
		$pdf->Cell(80,4,'Judul Buku',1,0,"C");
		$pdf->Cell(10,4,'Edisi',1,0,"C");
		$pdf->Cell(30,4,'Penulis',1,0,"C");
		$pdf->Cell(20,4,'Tahun Terbit',1,0,"C");
		$pdf->Cell(20,4,'Kota Terbit',1,0,"C");
		$pdf->Cell(0,4,'ISBN',1,1,"C");
		$pdf->SetFont('Arial',"", 8);

		foreach ($buku->result() as $row) {
			$pdf->Cell(80,4,$row->judulbuku,1,0,"L");
			$pdf->Cell(10,4,$row->edisi,1,0,"C");
			$pdf->Cell(30,4,$row->namapenulis,1,0,"C");
			$pdf->Cell(20,4,$row->thn_terbit,1,0,"C");
			$pdf->Cell(20,4,$row->kota_terbit,1,0,"C");
			$pdf->Cell(0,4,$row->isbn,1,1,"C");
		}
		$pdf->Output('databukuperpustakaan.pdf','i');
	}
	function exportsemua($offset = -1){
		$this->load->library('fpdf/Fpdf');
		$field = $this->input->get('field');
		$q = $this->input->get('q');

		$buku = $this->bm->get_buku(false, $offset, $q, $field);
		//$buku = $this->bm->get_buku();
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->SetMargins(10,10,10);
		$pdf->AddPage();
		$pdf->SetFont('Arial',"B", 14);
		$pdf->Cell(0,4,'Data Buku Perpustakaan',0,1,'C');
		$pdf->Ln(7);
		$pdf->SetFont('Arial',"B", 8);
		$pdf->Cell(80,4,'Judul Buku',1,0,"C");
		$pdf->Cell(10,4,'Edisi',1,0,"C");
		$pdf->Cell(30,4,'Penulis',1,0,"C");
		$pdf->Cell(20,4,'Tahun Terbit',1,0,"C");
		$pdf->Cell(20,4,'Kota Terbit',1,0,"C");
		$pdf->Cell(0,4,'ISBN',1,1,"C");
		$pdf->SetFont('Arial',"", 8);

		foreach ($buku->result() as $row) {
			$pdf->Cell(80,4,$row->judulbuku,1,0,"L");
			$pdf->Cell(10,4,$row->edisi,1,0,"C");
			$pdf->Cell(30,4,$row->namapenulis,1,0,"C");
			$pdf->Cell(20,4,$row->thn_terbit,1,0,"C");
			$pdf->Cell(20,4,$row->kota_terbit,1,0,"C");
			$pdf->Cell(0,4,$row->isbn,1,1,"C");
		}
		$pdf->Output('databukuperpustakaan.pdf','i');
	}
}
