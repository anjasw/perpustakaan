<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('loginsess')){
			redirect('login');
		}
	}

	function index(){
		$view['view'] = 'dasbor/index';
		$this->load->view('template',$view);
	}
}
