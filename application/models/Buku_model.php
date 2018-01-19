<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();

	}
	function get_buku($id=false, $offset = -1, $q = '', $field='', $tahun = '', $tahun1 =''){
		if ($tahun != '' && $tahun1 != '') {
			$this->db->join('tahunbuku','tbl_buku.thn_terbit=tahunbuku.idtahun');
			$this->db->join('tbl_bahasa','tbl_buku.idbahasa=tbl_bahasa.idbahasa');
			$this->db->join('tbl_penulis','tbl_buku.idpenulis=tbl_penulis.idpenulis');
			$this->db->where("thn_terbit <= $tahun AND thn_terbit >= $tahun1");
		}else{
		if ($id)  {
			$this->db->where("id=$id");
		}
		//$this->db->join('tbl_editor','tbl_buku.ideditor=tbl_editor.ideditor');
		$this->db->join('tbl_bahasa','tbl_buku.idbahasa=tbl_bahasa.idbahasa');
		$this->db->join('tbl_penulis','tbl_buku.idpenulis=tbl_penulis.idpenulis');
		$this->db->join('tahunbuku','tbl_buku.thn_terbit=tahunbuku.idtahun');
		if ($q != '') {
			$this->db->where("$field LIKE '%$q%'");
			$offset = -1;
		}
		if ($offset != -1) {
			$this->db->limit(3, $offset);
		}
	}
		return $this->db->get('tbl_buku');
	}
	function add_buku($data){
		return $this->db->insert('tbl_buku', $data);
	}
	function add_bahasa($data){
		return $this->db->insert('tbl_bahasa', $data);
	}
	function add_penulis($data){
		return $this->db->insert('tbl_penulis', $data);
	}
	function edit_buku($id,$data){
		//$this->db->join('tbl_bahasa','tbl_buku.idbahasa=tbl_bahasa.idbahasa');
		return $this->db->update('tbl_buku', $data, ['id'=> $id]);
	}
	function delete_buku($id=false){
		if (!$id) return false;

		return $this->db->delete('tbl_buku', ['id' => $id]);
	}
	function deletebukupenerbit($id=false){
		if (!$id) return false;

		return $this->db->delete('tbl_buku', ['penerbit' => $id]);
	}
}
