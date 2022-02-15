<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelMurid extends CI_Model {

    function getMurid($limit, $start,$keyword=null) {
     
		if($keyword){
			$this->db->like('nama',$keyword);
            
		}
		return $this->db->get('tb_murid',$limit,$start,$keyword)->result();
        
    }

    public function countMurid(){
        return $this->db->get('tb_murid')->num_rows();
    }


    
    function getAbsen($id) {
      
      	
        $this->db->select('*,count(tb_absen_murid.idmurid ) as totall');
        $this->db->from('tb_absen_murid');
        $this->db->join('tb_absensi','tb_absensi.idabsen=tb_absen_murid.idabsen');

        $this->db->where('tb_absen_murid.idmurid',$id);
     
		$query = $this->db->get();
		return $query;
    }


    
function getProgram($id=null){
         

    if($id!=null){
        $this->db->select('tb_program.namaprogram as nm,tb_program.mapel as mapel');
        $this->db->from('tb_program');
        $this->db->join('tb_murid', 'tb_murid.idprogram=tb_program.idprogram');
 
        $query = $this->db->get();
    	return $query->result();
    }else{

        $this->db->select('tb_program.namaprogram as nm,tb_program.mapel as mapel');
        $this->db->from('tb_program');
        $this->db->join('tb_murid', 'tb_murid.idprogram=tb_program.idprogram');
        $this->db->where('tb_program.idprogram',$id);
        $query = $this->db->get();
    	return $query->result();
    
    }
 
}

    

    function getById($id) {
           
        $this->db->select('*');
        $this->db->from('tb_murid');
        $this->db->where('idmurid',$id);
        $query = $this->db->get();
    	return $query->row();
    }


    

    function getTotal($id,$data){
        $this->db->insert($table,$data);
        $this->db->where('idguru',$id);
        $query = $this->db->get();
        return $query;
    }
    
    


    
    function getStatus($id){
      
        $this->db->select('murid.nama,guru.mapel');
        $this->db->where('idguru',$id);
        $this->db->from('murid');
        
        $this->db->join('guru', 'guru.id=murid.idguru');
        $query = $this->db->get();
        return $query;

    }

    function addData($data,$table){
		$this->db->insert($table,$data);
    //    $this->db->insert_batch($this->table_fasilitas, $data["fasilitas"]);
	}


    function setAbsen($data,$table){
		$this->db->insert($table,$data);
	}


    function update($data,$id){
        $this->db->update('tb_murid', $data, array('idmurid' => $id));
	}

    function delete($id){
        $this->db->delete('tb_murid', array('idmurid' => $id));
	}
    function deleteTingkat($id){
        $this->db->delete('tb_tingkat_murid', array('idmurid' => $id));
	}


    

    public function cariMurid($cari)
    {
       
        $this->db->select('*');

        $this->db->from('tb_murid');
  
        $this->db->like('nama', $cari);
  
        $query = $this->db->get();

        return $query->result();
    }





    
    
function getAbsensi($id,$limit, $start){
         

         $this->db->select('tb_program_murid.*,tb_program.mapel,tb_murid.nama,tb_Program.namaprogram,tb_Program.idguru');
        $this->db->from('tb_program_murid');
        $this->db->join('tb_murid', 'tb_murid.idmurid=tb_program_murid.idmurid','left');
        $this->db->join('tb_program', 'tb_program.idprogram=tb_program_murid.idprogram');
        $this->db->where('tb_program.idguru',$id);
        $query = $this->db->get();
    	return $query->result();
  
        
 
}


}