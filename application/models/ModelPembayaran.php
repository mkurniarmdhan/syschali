<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPembayaran extends CI_Model {





  function getPembayaran($limit=null, $start=null) {

   $this->db->select('tb_program_murid.*,sum(tb_program.hargaprogram) as total,tb_program.namaprogram as program,tb_program.mapel, tb_murid.nama');  
    $this->db->join('tb_program', 'tb_program.idprogram=tb_program_murid.idprogram');
    $this->db->join('tb_murid', 'tb_murid.idmurid=tb_program_murid.idmurid');
  $this->db->group_by('tb_program_murid.idmurid');

    $query = $this->db->get('tb_program_murid',$limit,$start);
    return $query->result();

    

    }



function getBayarId($id) {
  $this->db->select('tb_program_murid.*,sum(tb_program.hargaprogram) as total,tb_program.namaprogram as program,tb_program.mapel, tb_murid.nama');  
$this->db->from('tb_program_murid');
$this->db->join('tb_murid', 'tb_murid.idmurid=tb_program_murid.idmurid');
$this->db->join('tb_program', 'tb_program.idprogram=tb_program_murid.idprogram');
$this->db->where('tb_program_murid.idmurid',$id); 

  $query = $this->db->get();
return $query->result();
}


function addData($data,$table){
    $this->db->insert($table,$data);
}

function update($data,$id){
  $this->db->update('tb_program', $data, array('idprogram' => $id));
}

function delP($id){
  $this->db->delete('tb_program', array('idprogram' => $id));
}

function delete($id){
  $this->db->delete('tb_program_murid', array('idprogram' => $id));
}


}