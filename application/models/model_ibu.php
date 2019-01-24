<?php

  class model_ibu extends CI_Model{


    //GET ALL DATA IBU
     function getData(){
      $data = $this->db->query("select * from ibu ");
      return $data->result_array();
    }


    //Register a new User
    function register($datas){

      $this->load->database();
      $this->db->insert('ibu', $datas);
    }

    //Delete
    function delete_data($table,$id){
      $this->db->where('NIK',$id);
      $this->db->delete($table);
    }

    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    function update_data($table,$data,$where){
  		$res = $this->db->update($table,$data,$where);
      return $res;

  	}

    public function getSingleData($where=""){
      $data = $this->db->query("select * from ibu ".$where);
      return $data->result_array();
    }

  }
?>
