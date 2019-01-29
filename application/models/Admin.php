<?php


  class Admin extends CI_Model{

    function validate(){
      $arr['username'] = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
      $arr['password'] = htmlspecialchars(md5($this->input->post('password',TRUE)),ENT_QUOTES);


      return $this->db->get_where('admins', $arr)->row();
    }

    function getData($username,$password){
      $data = $this->db->query("select * from admins where username = ".$username."and password = ".$password ."LIMIT 1");
    }

  }


?>
