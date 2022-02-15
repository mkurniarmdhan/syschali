<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelProgram extends CI_Model {

  
  function getProgramAll($limit=null, $start){

         	
    $this->db->select('*');

    $query = $this->db->get('tb_program',$limit,$start)->result();
		return $query;
	}


  
  

  function getTingkat(){
    
    $this->db->select('tb_tingkat.*');
    $this->db->from('tb_tingkat');

    $query = $this->db->get();
  return $query->result();
  }
  
  
  
  

  function getProgramById($id){
    
    $this->db->select('*');
    $this->db->from('tb_program');
    $this->db->where('idprogram',$id);

    $query = $this->db->get();
  return $query->result();
  }
  


  



  function getProgram(){
    
    $this->db->select('tb_tingkat.namatingkat as nama,COUNT(tb_tingkat_murid.idmurid) as tot');
    $this->db->from('tb_tingkat_murid'); 
     $this->db->join('tb_tingkat','tb_tingkat.idtingkat=tb_tingkat_murid.idtingkat','left');
    $this->db->group_by('tb_tingkat_murid.idtingkat');
    $query = $this->db->get();
  return $query->result();
  }
  

  function getById($id) {
           
    $this->db->select('tb_program_murid.*,tb_program.*');
    $this->db->from('tb_program_murid');
    $this->db->join('tb_program','tb_program.idprogram=tb_program_murid.idprogram');
    $this->db->where('idmurid',$id);
    $query = $this->db->get();
  return $query->result();
}



function getPembayaran($id) {
    
   
$this->db->select('tb_program_murid.idmurid,tb_program.namaprogram,tb_program.mapel,SUM(tb_program.hargaprogram)as total,tb_program_murid.idprogram');  
$this->db->from('tb_program_murid');
$this->db->join('tb_program', 'tb_program.idprogram=tb_program_murid.idprogram');
$this->db->where('tb_program_murid.idmurid',$id); 

  $query = $this->db->get();
return $query->result();
} 


function updateProgram($data,$id){
  $this->db->update('tb_program', $data, array('idprogram' => $id));
}

function delP($id){
  $this->db->delete('tb_program', array('idprogram' => $id));
}

function deleteProgramGuru($id){
  $this->db->delete('tb_program_guru', array('idprogram' => $id));
}

function delete($id){
  $this->db->delete('tb_program_murid', array('idprogram' => $id));
}
function addData($data,$table){
  $this->db->insert($table,$data);
}



}