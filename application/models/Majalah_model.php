<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Majalah_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	function get_majalah($id=false, $offset = -1, $q = '', $field='', $tahun_terbit = '', $tahun_terbit1=''){
		if ($tahun_terbit != '' && $tahun_terbit1 != '') {
			$this->db->join('tahunmajalah','tbl_majalah.tahun_terbit=tahunmajalah.idtahun');
			$this->db->join('tbl_bahasa','tbl_majalah.idbahasa=tbl_bahasa.idbahasa');
			$this->db->where("tahun_terbit <= $tahun_terbit AND tahun_terbit >= $tahun_terbit1");
		}else{
		if ($id)  {
			$this->db->where("id=$id");
		}
		$this->db->join('tahunmajalah','tbl_majalah.tahun_terbit=tahunmajalah.idtahun');
		if ($q != '') {
			$this->db->where("$field LIKE '%$q%'");
			$offset = -1;
		}
		$this->db->join('tbl_bahasa','tbl_majalah.idbahasa=tbl_bahasa.idbahasa');
		if ($offset != -1) {
			$this->db->limit(10, $offset);
		}
	}
		$this->db->order_by('idmajalah');
		return $this->db->get('tbl_majalah');
	}
	function add_majalah($data){
		return $this->db->insert('tbl_majalah', $data);
	}
	function add_bahasa($data){
		return $this->db->insert('tbl_bahasa', $data);
	}
	function edit_majalah($id,$data){
		$this->db->join('tbl_bahasa','tbl_majalah.idbahasa=tbl_bahasa.idbahasa');
		return $this->db->update('tbl_majalah', $data, ['id'=> $id]);
	}
	function delete_majalah($id=false){
		if (!$id) return false;

		return $this->db->delete('tbl_majalah', ['id' => $id]);
	}
	function deletemajalahpenerbit($id=false){
		if (!$id) return false;

		return $this->db->delete('tbl_majalah', ['penerbit' => $id]);
	}
}
