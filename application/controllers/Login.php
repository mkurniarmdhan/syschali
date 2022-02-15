<?php  

/**
* 
*/
class login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		//$this->load->model("m_user");
	}

	function index(){
		if (!empty($this->session->userdata("username")))
			redirect(base_url("home"));

		$this->load->view("Login");
	}

	function login_proses(){

		$username=$this->input->post("username");
		$password=md5($this->input->post("password"));
		
		$this->db->where("username",$username);
		$this->db->where("password",$password);
		$user=$this->db->get("tb_guru")->row();
		$cek=$user->grup;

		$data_user = array (
		'id' => $user->idguru,'nama' => $user->namaguru,'foto'=> $user->foto	);

		if ($cek=="1") {

$this->session->set_userdata('data',$data_user);

			redirect(base_url("GuruAbsensi"));
		}elseif($cek=="0")
		{
			$this->session->set_userdata((array)$data_user);
			redirect(base_url("Home"));
		}else{
			redirect($this->index());
		}
	}

	function logout(){
		//$array_items = array('ID_USER','username','NAME','EMAIL','NO_TELP','JENIS_KELAMIN','ALAMAT','ACTIVATED','CREATED', 'GROUP_USER','LAST_LOGIN','LAST_UPDATE','PASSWORD','PHOTO');
		$this->session->unset_userdata($array_items);
		redirect($this->index());
	}
}

?>