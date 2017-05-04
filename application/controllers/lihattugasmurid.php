<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class LihatTugasMurid extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('M_murid');
    }

    function index(){
        $data = array ('data' => $this->M_murid->listData('t_tugas', '*'));
        $this->load->view('lihat_tugas_murid', $data);
    }

    function ke_list_tugas(){
      $data = array ('data' => $this->M_murid->listData('t_tugas', '*'));
      $this->load->view('lihat_tugas_murid', $data);
    }

    function aksi_logout(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
  }
?>
