<?php
  class M_login extends CI_Model{
    function cek_loginMurid($table, $where){
      $this->db->select('nis, username_murid, password_murid');
      return $this->db->get_where($table, $where);
    }

    function cek_loginOrtu($table, $where){
      $this->db->select('id_ortu, nis, username_ortu, password_ortu');
      return $this->db->get_where($table, $where);
    }

    function cek_loginGuru($table, $where){
      $this->db->select('nip, username_guru, password_guru');
      return $this->db->get_where($table, $where);
    }
  }
?>
