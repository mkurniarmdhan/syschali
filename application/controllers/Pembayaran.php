<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {


	
	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelPembayaran');
		$this->load->model('ModelMurid');
		$this->load->model('ModelProgram');
		$this->load->library('pagination');

		
		
	
	}
 

	

	public function index($id=null)
	{

		
	    $config['base_url'] = base_url('pembayaran/index'); //site url

		$count=$this->ModelPembayaran->getPembayaran();
		$count = count($count);

		$config['total_rows'] =$count;

		$config['per_page'] = 5;
		
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);


		$data['data']= $this->ModelPembayaran->getPembayaran($config['per_page'], $data['start']);




        $data['pagination'] = $this->pagination->create_links();

		$this->load->view('template/header');
		$this->load->view('laporan-pembayaran',$data);
		$this->load->view('template/footer');
		$this->load->view('modals');
		
	}


	

	function print(){
	
echo 'bergahsil';
    }
	

	function kirimWa(){
			
    }


}
