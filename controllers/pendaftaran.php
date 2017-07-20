<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('pendaftaran_model');

	}
	
	public function index()
	{
		//menentukan nama view yang akan ditampilkan
		$data['main_view']= 'pendaftaran_view';
		
		//load view
		$this->load->view('template', $data);
	}
	public function simpan()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('nama','Nama','trim|required');
			$this->form_validation->set_rules('alamat','Alamat','trim|required');
			$this->form_validation->set_rules('telp','Nomor Telepon','trim|required|numeric');
			//RIDHWAN ROFIANTO
			$this->form_validation->set_rules('asal_smp','SMP','trim|required');
			if ($this->form_validation->run() == TRUE){
				//insert validasi bisa atau ndak
				if($this->pendaftaran_model->insert()== TRUE){
					//sukses
					$data['notif']='Pendaftaran berhasil !';
					$data['main_view']='pendaftaran_view';
					$this->load->view('template',$data);
				}else {
					//gagal memasukan
					$data['notif']='Pendaftaran gagal !';
					$data['main_view']='pendaftaran_view';
					$this->load->view('template',$data);

				}
			}else{
				//validasi gagal
				$data['notif']= validation_errors();
				$data['main_view']='pendaftaran_view';
				$this->load->view('template',$data);
			} 

		}
	}
}
