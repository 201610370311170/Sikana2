<?php

  class model_adminLog extends CI_Model{

    function login($username, $password){
      $periksa = $this->db->get_where('users',array('username'=>$username,'password'=>md5($password)));

      if($periksa->num_rows()>0){
        return 1;
      } else {
        return 0;
      }
    }

    public function getData(){
        $query = $this->db->get('users');
        return $query->result();
    }

  }

?>
