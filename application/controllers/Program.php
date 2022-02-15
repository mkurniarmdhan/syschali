<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Program extends CI_Controller {

	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelGuru');
		$this->load->model('ModelProgram');
		$this->load->library('pagination');

		
	}

	public function index()
	{

		
  //konfigurasi pagination
 $config['base_url'] = base_url('program/index'); //site url

 
 $config['total_rows'] = $this->db->count_all('tb_program'); //total row
 $config['per_page'] = 5;  //show record per halaman

 $choice = $config["total_rows"] / $config["per_page"];
 $config["num_links"] = floor($choice);
	   // Membuat Style pagination untuk BootStrap v4
	   $config['next_link'] = '»';
	   $config['prev_link'] = '«';
	   $config['first_link'] = 'Awal';
	   $config['last_link'] = 'Akhir';
	   $config['full_tag_open'] = '<div class="d-block text-right card-footer"><ul class="pagination justify-content-end ">';
	   $config['full_tag_close'] = '</ul> </div>';
	   $config['num_tag_open'] = '<li>';
	   $config['num_tag_close'] = '</li>';
	   $config['cur_tag_open'] = '<li class="active"><a href="#">';
	   $config['cur_tag_close'] = '</a></li>';
	   $config['prev_tag_open'] = '<li>';
	   $config['prev_tag_close'] = '</li>';
	   $config['next_tag_open'] = '<li>';
	   $config['next_tag_close'] = '</li>';
	   $config['last_tag_open'] = '<li>';
	   $config['last_tag_close'] = '</li>';
	   $config['first_tag_open'] = '<li>';
	   $config['first_tag_close'] = '</li>';
   
	   $this->pagination->initialize($config);
	   $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;


	    
	   $data['data']=$this->ModelProgram->getProgramAll($config["per_page"], $data['page']);

	   $data['pagination'] = $this->pagination->create_links();


   
		$this->load->view('template/header');
		$this->load->view('program',$data);
		$this->load->view('template/footer');
		$this->load->view('modal');
	}


	
	public function addProgram()
	{


		
		$this->load->view('template/header');
		$this->load->view('add-program');
		$this->load->view('template/footer');
		$this->load->view('modal');
	}
	
	public function getubah()
    {
        echo json_encode($this->ModelProgram->getProgramById($_POST['idprogram']));
    }

 

	
	
	
	public function add()
	{

		
		$nama = $this->input->post('jp');
		$mapel = $this->input->post('mapel');
		$harag = $this->input->post('harga');

		
		$data = array(
		
			'namaprogram' => $nama,
			'mapel' => $mapel,
			'hargaprogram' => $harag
		);


		$this->ModelProgram->addData($data,'tb_program');
		redirect('program/index');

}



public function update()
{

	

	$id = $this->input->post('idprogram');
	$nama = $this->input->post('namaprogram');
	$mapel = $this->input->post('mapel');
	$harag = $this->input->post('hargaprogram');
	
	$data = array(
		'namaprogram' => $nama,
		'mapel' => $mapel,
		'hargaprogram' => $harag
	);
	
 
		
	$this->ModelProgram->updateProgram($data,$id);
	redirect('program');

}



	
public function hapus($id)
{


	
	
	$this->ModelProgram->delP($id);
	
	if($this->db->affected_rows()) {
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect('program');
	} else {
		$this->session->set_flashdata('info', 'Data gagal dihapus');
		redirect('program');
	}
}

	
}
