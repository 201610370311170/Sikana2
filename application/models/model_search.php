<?php

  class model_search extends CI_Model{

    function getData($NIK){
      $data = $this->db->query('select NIK,Nama,Alamat,Nomor_Telefon,Tgl_lahir from ibu where NIK = '.$NIK.' UNION ALL SELECT id_bayi,Nama,Jenis_kelamin,Tgl_lahir,NIK_Ibu from bayi where id_bayi ='.$NIK );
      return $data->result_array();
    }
    
  }

?>
