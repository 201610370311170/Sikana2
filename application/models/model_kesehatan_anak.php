<?php

  class model_kesehatan_anak extends CI_Model{


    //GET ALL DATA IBU
     function getData(){
      $data = $this->db->query("select * from kesehatan_anak ");
      return $data->result_array();
    }


    //Register a new User
    function register($datas){

      $this->load->database();
      $this->db->insert('kesehatan_anak', $datas);
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
      $data = $this->db->query("select * from kesehatan_anak ".$where);
      return $data->result_array();
    }

    function getAllData($where=""){
      $data = $this->db->query("select * from kesehatan_anak where id_bayi = ".$where);
      return $data->result_array();
    }

    function getRiwayatData($where=""){
      $data = $this->db->query("select * from kesehatan_anak where id_periksa = ".$where);
      return $data->result_array();
    }

    function getID_Data(){
      $data = $this->db->query("select id_periksa from kesehatan_anak");
      return $data->result_array();
    }

    function getData_NIK_Ibu($id_bayi){
      $data = $this->db->query("select NIK_Ibu from bayi where id_bayi = ".$id_bayi);
      return $data->result_array();
    }

  }
?>
