<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class model_profil extends CI_Model {
	public function __construct() {
		parent::__construct();
		
	}

	public function get_data()
	{
		$query = $this->db->get_where('profil', array('id_profil' => '1'));
		return $query->row_array();
	}

	public function edit_data()
	{
		$isi = $this->input->post('isi');
		$data=array(
			'ISI' => $isi
			);
		$this->db->where('id_profil', '1');
		return $this->db->update('profil', $data);
	}
}