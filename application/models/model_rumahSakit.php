<?php

  class model_rumahSakit extends CI_Model{

    function getData(){
      $data = $this->db->query("select * from rumah_sakit ");
      return $data->result_array();
    }

    
  }

?>
