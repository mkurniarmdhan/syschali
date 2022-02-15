<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Murid extends CI_Controller {

		 
	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelMurid');
		$this->load->library('pagination');
		$this->load->model('ModelGuru');
		$this->load->model('ModelProgram');
		
 
	}
 

	public function index()
	{	



		if($this->input->post('submit')){

						
			$data['keyword'] = $this->input->post('keyword');
				$this->session->set_userdata('keyword',$data['keyword']);

		}else{
									
				$data['keyword'] = $this->session->userdata('keyword');
			
			}


		//config
		$config['base_url'] = base_url('Murid/index'); //site url

		$this->db->like('nama',$data['keyword']);
		$this->db->from('tb_murid');
		$config['total_rows'] = $this->db->count_all_results();
		$config['per_page'] = 5;
		
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);
		$data['data'] = $this->ModelMurid->getMurid($config['per_page'], $data['start'],$data['keyword']);   
	
        $data['pagination'] = $this->pagination->create_links();

		$data['program'] = $this->ModelProgram->getTingkat();   
		$data['program'] = $this->ModelProgram->getProgram();   
	
		$this->load->view('template/header');
		$this->load->view('murid',$data);
		$this->load->view('template/footer');
	
		
	}
 
	public function detail($id)
	{
		$uri = $this->uri->segment($id);

		$row = $this->ModelMurid->getById($id);

        if ($row) {
            $data = array(
				'idmurid'	=>	$row->idmurid 					,		
				'nama'	=>	$row->nama 					,		
				'ttl'	=>	$row->ttl							,				
				'jk'	=>	$row->jk 							,				
				'alamat'	=>	$row->alamat				,	
				'agama'	=>	$row->agama					,		
				'kelas'	=>	$row->kelas			 	, 	
				'namawali'	=>	$row->namawali		,
				'alamatwali'		=>	$row->alamatwali,
				'pekerjaan'		=>	$row->pekerjaan	,
				'nohp'	=>	$row->nohp 					,		
				'status'	=>	1				,		
				'photo'	=>	'20171116051853.jpg'					,	
                'program' => $this->ModelProgram->getById($id),
	        );
		$data['guru'] = $this->ModelGuru->getGuru()->result();
	

			$data['getprogram'] = 
			$this->db->query("select * from  tb_program
		")->result();
			$data['getRiwayat'] = 
	
			$this->ModelMurid->getAbsen($id)->result();


		var_dump($data['getRiwayat'])
;

		
			
			$this->load->view('template/header');
			$this->load->view('murid-detail',$data);
			$this->load->view('template/footer');
			$this->load->view('modal');
		}
		
	

		
	
		
	}

	public function addmurid()
	{
		$data['tingkat'] = $this->ModelProgram->getTingkat();
	
		$this->load->view('template/header');
		$this->load->view('add-murid',$data);
		$this->load->view('template/footer');
		
	}


	
	
	
	public function add()
	{

		
		$nama 								= $this->input->post('nama');
		$ttl							 	= $this->input->post('ttl');
		$jk 								= $this->input->post('jk');
		$alamat							 = $this->input->post('alamat');
		$agama								 = $this->input->post('agama');
		$kelas			 					= $this->input->post('kelas');
		$namawali							 = $this->input->post('namawali');
		$alamatwali							 = $this->input->post('alamatwali');
		$pekerjaan							= $this->input->post('pekerjaan');
		$nohp 								= $this->input->post('nohp');
		$tingkat 								= $this->input->post('tingkat');
		
		
		$data = array(
			'nama 			'	=>	$nama 					,		
			'ttl			'	=>	$ttl							,				
			'jk 			'	=>	$jk 							,				
			'alamat			'	=>	$alamat				,	
			'agama			'	=>	$agama					,		
			'kelas			'	=>	$kelas			 	, 	
			'namawali		'	=>	$namawali		,
			'alamatwali'		=>	$alamatwali,
			'pekerjaan	'		=>	$pekerjaan	,
			'nohp 			'	=>	$nohp 					,		
			'tanggalmasuk 			'=>	 date("Y-m-d") 					,		
			'status 			'	=>	1				,		
			'photo 			'	=>	'20171116051853.jpg'					,		
		);
		$this->ModelMurid->addData($data,'tb_murid');
		$id=$this->db->insert_id();

		$datax = array(
			'idmurid'=> $id,'idtingkat'=>$tingkat
		);
		$this->db->insert('tb_tingkat_murid', $datax);
		redirect('murid/index');

}
	
	public function update()
	{

		$id = $this->input->post('id');

	
			
		$nama 								= $this->input->post('nama');
		$ttl							 	= $this->input->post('ttl');
		$jk 								= $this->input->post('jk');
		$alamat									 = $this->input->post('alamat');
		$agama								 = $this->input->post('agama');
		$kelas			 					= $this->input->post('kelas');
		$namawali							 = $this->input->post('namawali');
		$alamatwali							 = $this->input->post('alamatwali');
		$pekerjaan							= $this->input->post('pekerjaan');
		$nohp 								= $this->input->post('nohp');
		
		$data = array(
			'nama 			'	=>	$nama 					,		
			'ttl			'	=>	$ttl							,				
			'jk 			'	=>	$jk 							,				
			'alamat			'	=>	$alamat				,	
			'agama			'	=>	$agama					,		
			'kelas			'	=>	$kelas			 	, 	
			'namawali		'	=>	$namawali		,
			'alamatwali'		=>	$alamatwali,
			'pekerjaan	'		=>	$pekerjaan	,
			'nohp 			'	=>	$nohp 					,	
			

			);


			
		$this->ModelMurid->update($data,$id);
		redirect('murid/detail/'.$id);

}


public function addprogram(){

	
	$idmurid = $this->input->post('idmurid');
	$program = $this->input->post('program');
	$guru = $this->input->post('guru');

	
	$data = array(
	
		'idmurid' =>$idmurid,
	
		'idprogram' =>$program,
		'idguru' =>$guru

	);
	
		$this->ModelProgram->addData($data,'tb_program_murid');
		
	redirect('murid/detail/'.$idmurid);

}
 
public function hapus($id)
{

	
	$this->ModelMurid->delete($id);
	$this->ModelMurid->deleteTingkat($id);
	
	if($this->db->affected_rows()) {
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect('murid');
	} else {
		$this->session->set_flashdata('info', 'Data gagal dihapus');
		redirect('murid');
	}
}

public function delProgram($id)
{


	$this->ModelProgram->delete($id);
	
	if($this->db->affected_rows()) {
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect($_SERVER['HTTP_REFERER']);  
	} else {
		$this->session->set_flashdata('info', 'Data gagal dihapus');
		redirect($_SERVER['HTTP_REFERER']); 
	}
}
public function cari()
{


	$cari = $_POST['cari'];

	$data['data'] = $this->ModelMurid->cariMurid($cari);

	// foreach ($query as $row):
	// 	echo "<li><a href='#'>" . $row->title . "</a></li>";

	// endforeach;
	



}


}