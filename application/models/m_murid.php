<?php
  class M_murid extends CI_Model{
    function listData($table, $select){
      $this->db->select($select);
      $this->db->from($table);
      $this->db->order_by("no_tugas", "DESC");

      return $this->db->get()->result();
    }

    function insertData($table, $data){
      return $this->db->insert($table, $data);
    }

    function whereData($table, $where){
      $this->db->select('*');
      $this->db->where($where);
      $this->db->from($table);

      return $this->db->get()->result();
    }
  }
?>
