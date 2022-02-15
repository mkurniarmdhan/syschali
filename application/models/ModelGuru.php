<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelGuru extends CI_Model {

    function getGuru() {
     
        
        $this->db->from('tb_guru');
		$query = $this->db->get();
		return $query;
    }
    
        function getGuruById($id) {
           
            $this->db->select('*');
            $this->db->from('tb_guru');
  
            $this->db->where('tb_guru.idguru',$id);
            $query = $this->db->get();
            return $query->row();
            
            
        }

        

    public function getProgramById($id=null) {
        $this->db->select('tb_program_guru.*,tb_program.idprogram ,tb_program.namaprogram as np, tb_program.mapel');
        $this->db->from('tb_program_guru');
        $this->db->join('tb_program','tb_program.idprogram=tb_program_guru.idprogram');
        $this->db->where('tb_program_guru.idguru',$id);
        $query = $this->db->get();
        return $query->result();
      }
        

    function getMuridByIdGuru($id) {
           
               
        $this->db->select('tb_program.mapel,tb_program.namaprogram as program,tb_program_murid.idmurid,tb_murid.nama');
        $this->db->join('tb_program','tb_program.idprogram=tb_program_murid.idprogram');
        $this->db->join('tb_murid','tb_murid.idmurid=tb_program_murid.idmurid');
        $this->db->join('tb_program_guru','tb_program_guru.idprogram=tb_program.idprogram');
        $this->db->where('tb_program_guru.idguru',$id);

        $query = $this->db->get('tb_program_murid');
        return $query->result();
      }

    function getMurid($id) {
           
               
        $this->db->select('*,tb_murid.nama');
        $this->db->from('tb_program_murid');
        $this->db->join('tb_murid','tb_murid.idmurid=tb_program_murid.idmurid');
        $this->db->where('idguru',$id);
        $this->db->order_by('nama','ASC');
        $query = $this->db->get();
        return $query->result();
      }


  function addDataProgram($data,$table){
		$this->db->insert($table,$data);
    //    $this->db->insert_batch($this->table_fasilitas, $data["fasilitas"]);
	}






    

    function addData($data,$table){
		$this->db->insert($table,$data);
	}
    function update($data,$id){
        $this->db->update('guru', $data, array('id' => $id));
	}
    function delete($id){
        $this->db->delete('tb_guru', array('idguru' => $id));
	}



    



}