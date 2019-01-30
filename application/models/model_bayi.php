<?php

  class model_bayi extends CI_Model{

    public function getData(){
      $data = $this->db->query("select * from bayi ");
      return $data->result_array();
    }

    function delete_data($table,$id){
      $this->db->where('id_bayi',$id);
      $this->db->delete($table);
    }

    function register($datas){

      $this->load->database();
      $this->db->insert('bayi', $datas);
    }

    public function getSingleData($where=""){
      $data = $this->db->query("select * from bayi ".$where);
      return $data->result_array();
    }

    function edit_data($where,$table){
      return $this->db->get_where($table,$where);
    }

    function update_data($table,$data,$where){
      $res = $this->db->update($table,$data,$where);
      return $res;

    }

    function getAllData($where=""){
      $data = $this->db->query("select * from bayi where id_bayi = ".$where);
      return $data->result_array();
    }

    function getAllID($where=""){
      $data = $this->db->query("select id_bayi from bayi");
      return $data->result_array();
    }

    function countData(){
      $count = $this->db->query("select count(*) from bayi");
      return $count->row();
    }

    function getData_NIK_Ibu($id_bayi){
      $data = $this->db->query("select NIK_Ibu from bayi where id_bayi = ".$id_bayi);
      return $data->result_array();
    }

  }
?>
