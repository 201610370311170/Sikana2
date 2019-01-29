<?php

  class model_rumahSakit extends CI_Model{

    function getData($where=""){
      $data = $this->db->query("select * from rumah_sakit ".$where);
      return $data->result_array();
    }

    function register($data){
      $this->load->database();
      $this->db->insert('rumah_sakit', $data);
    }

    function delete_data($table,$id){
      $this->db->where('id_rs',$id);
      $this->db->delete($table);
    }

    function update_data($table,$data,$where){
      $res = $this->db->update($table,$data,$where);
      return $res;

    }

    function countData(){
      $count = $this->db->query("select count(*) from ibu");
      return $count->row();
    }


  }

?>
