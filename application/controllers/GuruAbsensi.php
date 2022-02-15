<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GuruAbsensi extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
        $this->load->library('pagination');
		$this->load->model('ModelGuru');
		$this->load->model('ModelProgram');
		$this->load->model('ModelAbsen');
		$this->load->model('ModelMurid');

	}

 
 
	
	public function index()

	
	{


		$id=$this->session->data['id'];

		$re= $this->db->query("SELECT * FROM tb_program_murid WHERE idguru=$id")->num_rows();



		$config['base_url'] = site_url('guruabsensi/index'); //site url

		$config['total_rows'] = $re;
		$config['per_page'] = 5;
		
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);

		$data['murid'] = $this->ModelAbsen->getDataMurid($id,$config['per_page'], $data['start']);



		var_dump($data['murid'])
;die;		$data['guru'] = $this->ModelGuru->getGuruById($id);


		$data['program'] = $this->ModelGuru->getProgramById($id);


        $data['pagination'] = $this->pagination->create_links();


		$this->load->view('guru/home',$data);

		$this->load->view('modals');
		
		

	
	}

  public function absensi(){

	$id=$this->session->data['id'];
	if((!empty($_GET['date']))&&(!empty($_GET['tingkat'])))

{
	$tgl =  $_GET['date'];
	$tingkat =  $_GET['tingkat'];
}else{

	$tgl =  null;
	$tingkat = 0;
}
																


	$data['murid'] = $this->db->query("

	SELECT * , tb_murid.nama, tb_program.namaprogram FROM tb_program_murid 
	INNER JOIN tb_murid ON tb_murid.idmurid=tb_program_murid.idmurid
	INNER JOIN tb_program ON tb_program.idprogram=tb_program_murid.idprogram
	INNER JOIN tb_tingkat_murid ON tb_tingkat_murid.idmurid=tb_program_murid.idmurid
	INNER JOIN tb_tingkat ON tb_tingkat.idtingkat=tb_tingkat_murid.idtingkat 
	WHERE idguru=$id AND  tb_tingkat_murid.idtingkat=$tingkat AND NOT EXISTS (SELECT * FROM tb_absensi WHERE tgl_absen='$tgl' AND tb_murid.idmurid=tb_absensi.idmurid) ORDER BY tb_murid.nama ASC
	 ")->result();




	$this->load->view('guru/input-absen',$data);
	
  }


    function setAbsen(){ 

 
	$data= array (

			'idmurid'=> $this->input->get('idmurid'),
			'tgl_absen'=> $this->input->get('tgl_absen'),	
			'keterangan'=> $this->input->get('ket'),
			
		);
	
 
	$this->db->insert('tb_absensi',$data);
	$id = $this->db->insert_id();

	$tb_absen_murid = array(

			'idmurid'=> $this->input->get('idmurid'),
			'idabsen'=> $id,
			'idprogram'=> $this->input->get('program'),
		
			);

			$this->db->insert('tb_absen_murid',$tb_absen_murid);
	
			redirect('guruabsensi/absensi?date='. $this->input->get('tgl_absen').'&tingkat='.$this->input->get('tingkat')); 

}

	public function getCatatan()
    {

        echo json_encode($this->ModelAbsen->getIdAbsen($_POST['idprogram']));
    }

 

				public function setCatatan()
				{

					

					$id = $this->input->post('idmurid');
					$program = $this->input->post('idprogram');
				
					$catatan = $this->input->post('catatan');
				


				$this->db->set('catatan',$catatan);
				$this->db->where('idmurid', $id AND 'idprogram',$program);
				$this->db->update('tb_absen_murid');
					redirect($_SERVER['HTTP_REFERER']);

				}


    }



	
