<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
	}
	
	public function login()
	{
		$this->load->view('login_view');
	}
	
	public function data_siswa()
	{
		$data['main_view'] = 'data_siswa_view';
		
		$this->load->view('template', $data);
	}
	
	public function detil_siswa()
	{
		$data['main_view'] = 'detil_data_siswa_view';
		
		$this->load->view('template', $data);
	}
	public function simpan()
	{
		if ($this->input->post('submit')) {
			$this->form_validation->set_rules('username','Username','trim|required');
			$this->form_validation->set_rules('password','Password','trim|required');
			
			if ($this->form_validation->run() == TRUE){
				$data['notif'] = 'Validasi Sukses';
				$data['main_view'] = 'login_view';

				$this->load->view('login_view',$data);
			}else {
				$data['notif'] = validation_errors();
				$data['main_view'] = 'login_view';

				$this->load->view('login_view',$data);
			} 

		}
	}
}