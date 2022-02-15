<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		// $this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('ModelAbsen');
		$this->load->library('pagination');
	
}


	public function index()
	{ 




$config['base_url'] = site_url('absensi/index'); //site url
	


$re= $this->db->query("SELECT * FROM  tb_absen_murid ORDER BY idmurid")->num_rows();


		$config['total_rows'] =$re;

		$config['per_page'] = 10;
		
		$this->pagination->initialize($config);

		$data['start'] = $this->uri->segment(3);


		// $data['data'] = $this->db->query(
		// 		"SELECT COUNT(tb_absen_murid.idmurid) as totalpertemuan ,tb_absensi.keterangan,tb_absen_murid.catatan, tb_murid.nama,tb_absen_murid.idmurid
 		// 		FROM tb_absen_murid  
		// 		INNER JOIN tb_absensi ON tb_absensi.idabsen=tb_absen_murid.idabsen
		// 		INNER JOIN tb_murid ON tb_murid.idmurid=tb_absen_murid.idmurid
		// 			GROUP BY tb_absen_murid.idmurid LIMIT 10  " 

		// )->result();
		$data['data'] = $this->ModelAbsen->getAbsensi($config['per_page'], $data['start']);

        $data['pagination'] = $this->pagination->create_links();



		
		
		$this->load->view('template/header');
		$this->load->view('laporan-absensi',$data);
		$this->load->view('template/footer');
		$this->load->view('modal');

	}

	public function getubah()
    {
        echo json_encode($this->ModelAbsen->getIdAbsen($_POST['idprogram']));
    }

 




		public function cetak(){



		$this->load->view('cetak');


		}


        public function kirimPesan(){

            // https://api.whatsapp.com/send/?phone=62895619310788&text=hallo&app_absent=0

}


}
// <?php
//	header("Content-type: application/vnd-ms-excel");
//	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
//	?> 