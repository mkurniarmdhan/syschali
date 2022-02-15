<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	
	
		
		
	}

	public function index()
	{
		
		

		

		$data['murid']=$this->db->get('tb_murid');
		$data['guru']=$this->db->get('tb_guru');

		$data['totalmurid'] =$data['murid']->num_rows();
		$data['totalguru'] =$data['guru']->num_rows();

		$data['pembayaran']   = $this->db->query("
			SELECT  sum(total) from  tb_pembayaran_detail")->result() ;

var_dump($data['pembayaran'])
		;

		$this->load->view('template/header');
	
		$this->load->view('index',$data);
		$this->load->view('template/footer');
		$this->load->view('modal');
		
	}
}
