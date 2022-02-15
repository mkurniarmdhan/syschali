<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelGuru');
		$this->load->model('ModelProgram');
	

		// if($this->session->userdata('status') != "login"){
		// 	$this->session->set_flashdata('info', 'Maaf, Anda harus login terlebih dahulu.');
		// 	redirect(base_url("site"));
		// }
	}


	
	public function index()
	{	
		$data['data'] = $this->ModelGuru->getGuru()->result();
	
 
		$this->load->view('template/header');
		$this->load->view('guru',$data);
		$this->load->view('template/footer');
	}

	public function detail($id=null)
	{
	
 
		$data['guru'] = $this->ModelGuru->getGuruById($id); 
		$data['program'] = $this->ModelGuru->getProgramById($id); 
		$data['murid'] = $this->ModelGuru->getMurid($id);
		

		$data['getprogram'] =  
			$this->db->query("select * from  tb_program
			where NOT EXISTS (
				select * from tb_program_guru where idguru='$id' AND tb_program.idprogram= tb_program_guru.idprogram
			)")->result();



		$this->load->view('header');
		$this->load->view('guru-detail',$data);
		$this->load->view('footer');
	$this->load->view('modal');
	}
	public function addguru()
	{

	
		$this->load->view('header');
		$this->load->view('add-guru');
		$this->load->view('footer');
	}


	
	
	
	public function add()
	{

		
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$nohp = $this->input->post('nohp');
		
		
		
		$data = array(
			'namaguru' => $nama,
			'alamat' => $alamat,
			'nohp' => $nohp,
			'status'=>'1',
			'foto' => 'https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311_960_720.png'
			);
		$this->ModelGuru->addData($data,'tb_guru');
		redirect('guru/index');

}





public function addprogram(){

	
	$idguru = $this->input->post('idguru');
	$program = $this->input->post('program');

	
	$data = array(
	
		'idguru' =>$idguru,
	
		'idprogram' =>$program

	);
	
		$this->ModelGuru->addData($data,'tb_program_guru');
		
	redirect('guru/detail/'.$idguru);

}

public function deleteProgramGuru($id)
{


	$this->ModelProgram->deleteProgramGuru($id);
	
	if($this->db->affected_rows()) {
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect($_SERVER['HTTP_REFERER']);  
	} else {
		$this->session->set_flashdata('info', 'Data gagal dihapus');
		redirect($_SERVER['HTTP_REFERER']); 
	}
}


	
	public function update()
	{

		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$mapel = $this->input->post('mapel');
		
		
		$data = array(
			'nama' => $nama,
			'mapel' => $mapel,
			'foto' => 'https://cdn.pixabay.com/photo/2014/05/31/23/16/teacher-359311_960_720.png'
			);
		$this->ModelGuru->update($data,$id);
		redirect('guru/detail/'.$id);

}


public function hapus($id)
{
	$this->ModelGuru->delete($id);
	
	if($this->db->affected_rows()) {
		$this->session->set_flashdata('info', 'Data berhasil dihapus');
		redirect('guru');
	} else {
		$this->session->set_flashdata('info', 'Data gagal dihapus');
		redirect('mobil');
	}
}



}