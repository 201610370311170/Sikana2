<?php

  class model_pegawai extends CI_Model{

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

      public function getDataName($where=""){

        $data = $this->db->query("select Nama from pegawai where NIP = ".$where);
        return $data->result_array();

      }



  }

?>
