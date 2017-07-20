<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendaftaran_model extends CI_Model
{
	//RIDHWAN ROFIANTO
	
	public function __construct()
	{
		parent::__construct();
	}
	public function insert()
	{
		$data = array(
				//nama kolom		//nama form input
				'id_pendaftar'			=>	NULL,
				'nama'					=>	$this->input->post('nama'),
				'alamat'				=>	$this->input->post('alamat'),
				'asal_smp'				=>	$this->input->post('asal_smp'),
				'telp'					=>	$this->input->post('telp')
			);
		//proses input data
		$this->db->insert('tb_pendaftar',$data);
		//cek berhasil insert data
		if($this->db->affected_rows()>0)
		{
			return TRUE;
		} else {
			return FALSE;
		}
	}
}

