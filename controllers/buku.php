<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {
    
    public $data = '';
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('buku_model');
    }
	
    public function index()
	{  //ambil data
		$this->data['data_buku'] = $this->buku_model->getBook();
        //load
        $this->load->view('buku_view', $this->data);
	}
}
?>