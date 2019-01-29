<?php

  class model_pegawai extends CI_Model{

      function validate(){
        $arr['NIP'] = $this->input->post('NIP');
        $arr['password'] = md5($this->input->post('password'));

        return $this->db->get_where('pegawai', $arr)->row();
      }


      public function getData($where=""){

        $data = $this->db->query("select * from pegawai ".$where);
        return $data->result_array();

      }

      function delete_data($table,$id){
        $this->db->where('NIP',$id);
        $this->db->delete($table);
      }

      function register($datas){

        $this->load->database();
        $this->db->insert('pegawai', $datas);
      }

      function ubah($data, $id){
        $this->db->where('NIP',$id);
        $this->db->update('pegawai', $data);
        return TRUE;
      }

      function update_data($table,$data,$where){
    		$res = $this->db->update($table,$data,$where);
        return $res;

    	}

      function getDataName($where=""){

        $data = $this->db->query("select Nama from pegawai where NIP = ".$where);
        return $data->result_array();

      }

      function getAllData($where=""){

        $data = $this->db->query("select * from pegawai where NIP = ".$where);
        return $data->result_array();

      }

      function countData(){
        $count = $this->db->query("select count(*) from pegawai");
        return $count->row();
      }




  }

?>
