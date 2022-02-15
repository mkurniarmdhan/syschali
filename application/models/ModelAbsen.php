<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelAbsen extends CI_Model {

    function getAbsen($limit,$start,$id=null) {
    

        if($id!=null){
             
        $this->db->select('*');
        $this->db->from('tb_absensi');
        $this->db->join('tb_murid','tb_murid.idmurid=tb_absensi.idmurid','LEFT');
		$query = $this->db->get()->result();
		return $query;
        }else{
             
        $this->db->select('*');
        $this->db->from('tb_absensi');
		$query = $this->db->get()->result();
		return $query;
        }

    }


public function getIdAbsen($id){
 $this->db->select('*');
        $this->db->from('tb_absensi');
        $this->db->where('idmurid',$id);


		$query = $this->db->get()->result();
		return $query;

}


    public function getAbsensi($limit, $start){
        $this->db->select('*,tb_murid.nama ,COUNT(tb_absensi.idmurid) as total');
        $this->db->join('tb_murid','tb_murid.idmurid=tb_absensi.idmurid');
        $this->db->join('tb_absen_murid','tb_absen_murid.idabsen=tb_absensi.idabsen');
        $this->db->group_by('tb_absen_murid.idmurid');
        //$this->db->where('tb_absensi.keterangan','HADIR');
        $query = $this->db->get('tb_absensi',$limit,$start)->result();
		return $query;

    }
public function getDataMurid($id,$limit, $start){
  $this->db->select('*');
  $this->db->join('tb_murid','tb_murid.idmurid=tb_absen_murid.idmurid');
  
   $this->db->where('idguru',$id);

   $query = $this->db->get('tb_absen_murid',$limit,$start)->result();
		return $query;
      
}
//     }
// public function getDataMurid($id,$limit, $start){
//   $this->db->select('*,COUNT(tb_absen_murid.idmurid) as total');
//   $this->db->join('tb_absen_murid','tb_absen_murid.idmurid=tb_program_murid.idmurid','LEFT');
//    $this->db->join('tb_murid','tb_murid.idmurid=tb_program_murid.idmurid');
//    $this->db->join('tb_program','tb_program.idprogram=tb_program_murid.idprogram');
//   $this->db->group_by('tb_murid.idmurid');
 
//    $this->db->where('tb_program_murid.idguru',$id);
//    $this->db->order_by('tb_program.mapel','DESC');
//    $this->db->order_by('tb_murid.nama','ASC');

//    $query = $this->db->get('tb_program_murid',$limit,$start)->result();
// 		return $query;
      
// }



    public function getRiwayatAbsen($limit, $start){
        $this->db->select('*,COUNT(tb_absen_murid.idmurid) as total,tb_murid.nama');
        $this->db->join('tb_absensi','tb_absensi.idabsen=tb_absen_murid.idabsen','INNER');
        $this->db->join('tb_murid','tb_murid.idmurid=tb_absen_murid.idmurid','INNER');

        $query = $this->db->get('tb_absen_murid',$limit,$start)->result();
		return $query;

    }





    public function getMurid($tgl=null){

 
        $this->db->select('*,tb_murid.nama,tb_program.namaprogram as program, tb_program.mapel as mapel');
        $this->db->from('tb_murid');
        $this->db->join('tb_program_murid','tb_program_murid.idmurid=tb_murid.idmurid');
        $this->db->join('tb_program', 'tb_program.idprogram=tb_program_murid.idprogram','INNER');
       
    $query = $this->db->get()->result();
		return $query;

    }



    function addData($data,$table){
		$this->db->insert($table,$data);
	}
    function update($data,$id){
        $this->db->update('guru', $data, array('id' => $id));
	}
    function delete($id){
        $this->db->delete('guru', array('id' => $id));
	}


}