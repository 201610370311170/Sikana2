<?php

  class model_kesehatan_ibu extends CI_Model{


    //GET ALL DATA IBU
     function getData(){
      $data = $this->db->query("select * from kesehatan_ibu ");
      return $data->result_array();
    }


    //Register a new User
    function register($datas){

      $this->load->database();
      $this->db->insert('kesehatan_ibu', $datas);
    }

    //Delete
    function delete_data($table,$id){
      $this->db->where('id_periksa',$id);
      $this->db->delete($table);
    }

    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    function update_data($table,$data,$where){
  		$res = $this->db->update($table,$data,$where);
      return $res;

  	}

    function getSingleData($where=""){
      $data = $this->db->query("select * from kesehatan_ibu ".$where);
      return $data->result_array();
    }

    function getAllData($where=""){
      $data = $this->db->query("select * from kesehatan_ibu where NIK_Ibu = ".$where);
      return $data->result_array();
    }

    function getRiwayatData($where=""){
      $data = $this->db->query("select * from kesehatan_ibu where id_periksa = ".$where);
      return $data->result_array();
    }

    function getID_Data(){
      $data = $this->db->query("select id_periksa from kesehatan_ibu");
      return $data->result_array();
    }


  }
?>
