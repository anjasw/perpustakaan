<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Majalah extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Majalah_model','mm');
		if(!$this->session->userdata('loginsess')){
			redirect('login');
		}
		$this->load->library('pagination');
	}

	function index($offset = 0){
		$view['view'] = 'majalah/list';
		//$view['data'] = $this->mm->get_majalah();
		$q = $this->input->get('q');
		$field = $this->input->get('field');

		$tahun = $this->input->get('tahun_terbit');
		$tahun1 = $this->input->get('tahun_terbit1');
		$view['option'] = $this->db->get('tahunmajalah');
		$view['data'] = $this->mm->get_majalah(false, $offset, $q, $field,$tahun, $tahun1);
		$majalah = $this->mm->get_majalah(false, -1, $q, $field,$tahun,$tahun1);

		$config['base_url'] = base_url().'majalah/index';
		$config['total_rows'] = $majalah->num_rows();
		$config['per_page'] = 10;
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
		if ($this->mm->deletemajalahpenerbit($id)) {
			$this->session->set_flashdata('deletestatus', 'true');
			redirect('majalah');
        }else{
			$this->session->set_flashdata('deletestatus', 'false');
			redirect('majalah');
		}
	}

	function add(){
		$view['user'] = $this->session->userdata('loginsess');
		$view['view'] = 'majalah/add';
		$view['bahasa'] = $this->db->get('tbl_bahasa');
		$this->db->order_by('tahun','desc');
		$view['tahun'] = $this->db->get('tahunmajalah');


		if($_SERVER['REQUEST_METHOD']==='POST'){
			$this->form_validation->set_rules('idmajalah', 'ID Majalah', 'required|min_length[3]|max_length[8]');
			//$this->form_validation->set_rules('idbahasa', 'Penerbit', 'required');
			$this->form_validation->set_rules('judulmajalah', 'Judul Majalah', 'required');
			//$this->form_validation->set_rules('volume', 'Volume', 'required|max_length[3]');
			//$this->form_validation->set_rules('no', 'no', 'required');
			//$this->form_validation->set_rules('issn', 'ISSN', 'required|max_length[15]');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|max_length[4]');
			$this->form_validation->set_rules('kota_terbit', 'Kota Terbit', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('ketersediaan', 'Ketersediaan', 'required|max_length[2]');
			//$this->form_validation->set_rules('catatan', 'Catatan', 'required');
			//$this->form_validation->set_rules('tanggal_terima', 'Catatan', 'max_length[15]');

			if ($this->form_validation->run() == TRUE){
				$data['idmajalah'] 				= $this->input->post('idmajalah');
        $data['judulmajalah'] 		= $this->input->post('judulmajalah');
        $data['volume'] 					= $this->input->post('volume');
        $data['no'] 							= $this->input->post('no');
        $data['tahun_terbit'] 		= $this->input->post('tahun_terbit');
        $data['kota_terbit'] 			= $this->input->post('kota_terbit');
        $data['penerbit'] 				= $this->input->post('penerbit');
        $data['issn'] 						= $this->input->post('issn');
        $data['idbahasa'] 				= $this->input->post('idbahasa');
        $data['ketersediaan'] 		= $this->input->post('ketersediaan');
        $data['catatan'] 					= $this->input->post('catatan');
        $data['tanggal_terima'] 					= $this->input->post('tanggal_terima');

				$basepath = './assets/images/';
				$abspath = date('YmdHis').'_'.strtolower(str_replace(array(" ", ",","-", "&"), "_", $_FILES['images']['name']));
				if(!empty($_FILES['images']['name'])) {
					if(move_uploaded_file($_FILES["images"]["tmp_name"], $basepath.$abspath)) {
						$data['sampul'] = $abspath;
					}else{
						$this->session->set_flashdata('insertstatus', 'false');
						redirect('majalah');
					}
				}
				if ($this->mm->add_majalah($data)) {
          	$this->session->set_flashdata('insertstatus', 'true');
          }else $this->session->set_flashdata('insertstatus', 'false');
           redirect('majalah');
        }
		}
		$this->load->view('template',$view);
	}

	function edit($id){
		$view['view'] = 'majalah/edit';
		$view['data'] = $this->mm->get_majalah($id);
		$view['bahasa'] = $this->db->get('tbl_bahasa');
		$view['tahun'] = $this->db->get('tahunmajalah');

		if ($view['data']->num_rows()==0) {
			redirect('majalah');
		}
		if($_SERVER['REQUEST_METHOD']==='POST'){
			//$this->form_validation->set_rules('idmajalah', 'ID Majalah', 'required|min_length[3]|max_length[8]');
			//$this->form_validation->set_rules('idbahasa', 'Penerbit', 'required');
			$this->form_validation->set_rules('judulmajalah', 'Judul Majalah', 'required');
			//$this->form_validation->set_rules('volume', 'Volume', 'required|max_length[3]');
			//$this->form_validation->set_rules('no', 'no', 'required');
			//$this->form_validation->set_rules('issn', 'ISSN', 'required|max_length[15]');
			$this->form_validation->set_rules('tahun_terbit', 'Tahun Terbit', 'required|max_length[4]');
			$this->form_validation->set_rules('kota_terbit', 'Kota Terbit', 'required');
			$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
			$this->form_validation->set_rules('ketersediaan', 'Ketersediaan', 'required|max_length[2]');
			//$this->form_validation->set_rules('catatan', 'Catatan', 'required');
			//$this->form_validation->set_rules('tanggal_terima', 'Catatan', 'max_length[15]');

			if($this->form_validation->run() == TRUE){
				$data['idmajalah'] 		= $this->input->post('idmajalah');
				$data['judulmajalah'] 		= $this->input->post('judulmajalah');
        $data['volume'] 					= $this->input->post('volume');
        $data['no'] 							= $this->input->post('no');
        $data['tahun_terbit'] 		= $this->input->post('tahun_terbit');
        $data['kota_terbit'] 			= $this->input->post('kota_terbit');
        $data['penerbit'] 				= $this->input->post('penerbit');
        $data['issn'] 						= $this->input->post('issn');
        $data['idbahasa'] 				= $this->input->post('idbahasa');
        $data['ketersediaan']			= $this->input->post('ketersediaan');
        $data['catatan'] 					= $this->input->post('catatan');

				$basepath = './assets/images/';
				$abspath = date('YmdHis').'_'.strtolower(str_replace(array(" ", ",","-", "&"), "_", $_FILES['images']['name']));
				if(!empty($_FILES['images']['name'])) {
					if(move_uploaded_file($_FILES["images"]["tmp_name"], $basepath.$abspath)) {
						$data['sampul'] = $abspath;
					}else{
						$this->session->set_flashdata('insertstatus', 'false');
						redirect('majalah');
					}
				}

        if($this->mm->edit_majalah($id,$data)) {
          $this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
          redirect('majalah');
        }
		}
		$this->load->view('template',$view);
	}

	public function detail($id){
		$view['view'] = 'majalah/detail';
		$view['data'] = $this->mm->get_majalah($id);
		//$view['bahasa'] = $this->db->get('tbl_bahasa');
		if ($view['data']->num_rows()==0) {
			redirect('majalah');
		}
		$this->load->view('template',$view);
	}

	function delete($id){
		if ($this->mm->delete_majalah($id)) {
			$this->session->set_flashdata('deletestatus', 'true');
			redirect('majalah');
        }else{
			$this->session->set_flashdata('deletestatus', 'false');
			redirect('majalah');
		}
	}

	public function bahasa(){
		if($_SERVER['REQUEST_METHOD']==='POST'){
			$this->form_validation->set_rules('namabahasa', 'Bahasa', 'required');
			if($this->form_validation->run() == TRUE){
				$data['namabahasa'] = $this->input->post('namabahasa');
				if ($this->mm->add_bahasa($data)) {
        	$this->session->set_flashdata('insertstatus', 'true');
        }else $this->session->set_flashdata('insertstatus', 'false');
      	redirect('majalah/add');
			}
		}
	}

	function export($offset = 0){
		$this->load->library('fpdf/Fpdf');
		$field = $this->input->get('field');
		$q = $this->input->get('q');
		$tahun_terbit = $this->input->get('tahun_terbit');
		$tahun_terbit1 = $this->input->get('tahun_terbit1');
		$majalah = $this->mm->get_majalah(false, $offset, $q, $field, $tahun_terbit, $tahun_terbit1);
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->SetMargins(10,10,10);
		$pdf->AddPage();
		$pdf->SetFont('Arial',"B", 14);
		$pdf->Cell(0,4,'Data Majalah Perpustakaan',0,1,'C');
		$pdf->Ln(7);
		$pdf->SetFont('Arial',"B", 8);

		$pdf->Cell(90,6,'Judul Majalah',1,0,"C");
		$pdf->Cell(15,6,'Volume',1,0,"C");
		$pdf->Cell(15,6,'Nomor',1,0,"C");
		$pdf->Cell(20,6,'Tahun Terbit',1,0,"C");
		$pdf->Cell(0,6,'ISSN',1,1,"C");
		$pdf->SetFont('Arial',"", 9);

		foreach ($majalah->result() as $row) {
			$pdf->Cell(90,6,$row->judulmajalah,1,0,"L");
			$pdf->Cell(15,6,$row->volume,1,0,"C");
			$pdf->Cell(15,6,$row->no,1,0,"C");
			$pdf->Cell(20,6,$row->tahun,1,0,"C");
			$pdf->Cell(0,6,$row->issn,1,1,"C");
		}
		$sql = $this->db->query("SELECT COUNT(*) FROM `tbl_majalah` where tahun_terbit <= $tahun_terbit AND tahun_terbit >= $tahun_terbit1");
		$result = $sql->row_array();
		$count = $result['COUNT(*)'];
		$pdf->Cell(90,6,"",0,0,"C");
		$pdf->Cell(50,6,"Total Data",1,0,"C");
		$pdf->Cell(0,6,$count,1,0,"C");
		$pdf->Output('datamajalahperpustakaan.pdf','i');
	}
	function exportsemua($offset = -1){
		$this->load->library('fpdf/Fpdf');
		$field = $this->input->get('field');
		$q = $this->input->get('q');
		$majalah = $this->mm->get_majalah(false, $offset, $q, $field);
		$pdf = new FPDF('P', 'mm', 'A4');
		$pdf->SetMargins(10,10,10);
		$pdf->AddPage();
		$pdf->SetFont('Arial',"B", 14);
		$pdf->Cell(0,4,'Data Majalah Perpustakaan',0,1,'C');
		$pdf->Ln(7);
		$pdf->SetFont('Arial',"B", 8);
		$pdf->Cell(90,6,'Judul Majalah',1,0,"C");
		$pdf->Cell(15,6,'Volume',1,0,"C");
		$pdf->Cell(15,6,'Nomor',1,0,"C");
		$pdf->Cell(20,6,'Tahun Terbit',1,0,"C");
		$pdf->Cell(0,6,'ISSN',1,1,"C");
		$pdf->SetFont('Arial',"", 9);

		foreach ($majalah->result() as $row) { 					//	Menampilkan seluruh data sesuai serach dan tahun yg di pilih
			$pdf->Cell(90,6,$row->judulmajalah,1,0,"L");
			$pdf->Cell(15,6,$row->volume,1,0,"C");
			$pdf->Cell(15,6,$row->no,1,0,"C");
			$pdf->Cell(20,6,$row->tahun,1,0,"C");
			$pdf->Cell(0,6,$row->issn,1,1,"C");
		}

		$sql = "SELECT COUNT(*)	FROM `tbl_majalah`";		//	untuk menghitung jumlah data yg ada di tabel sesuai search dan tahun yg di pilih
		$query = $this->db->query($sql);								//	untuk menghitung jumlah data yg ada di tabel sesuai search dan tahun yg di pilih
		$result = $query->row_array();									//	untuk menghitung jumlah data yg ada di tabel sesuai search dan tahun yg di pilih
		$count = $result['COUNT(*)'];										//	untuk menghitung jumlah data yg ada di tabel sesuai search dan tahun yg di pilih


		$pdf->Cell(90,6,"",0,0,"C");
		$pdf->Cell(50,6,"Total Data",1,0,"C");
		$pdf->Cell(0,6,$count,1,0,"C"); 								//	menampilkan data yg sudah dihitung



		$pdf->Output('datamajalahperpustakaan.pdf','i');// memberi nama untuk file pdfnya, pada 'i' itu adalah untuk melihat data yg ada, bisa di ganti dengan 'd' untuk langsung mendownload data
	}
}
