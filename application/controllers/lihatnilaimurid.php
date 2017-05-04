<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class LihatNilaiMurid extends CI_Controller {
    function __construct(){
      parent::__construct();
      $this->load->model('M_murid');
    }

    function index(){
        $data = array (
          'data' => array(
            'nilai' =>$this->M_murid->listData('t_nilai_tugas', '*'),
            'tugas' =>$this->M_murid->whereData('t_tugas', array('no_tugas' => 4)),
          ),
        );
        $this->load->view('lihat_nilai_murid', $data);
    }

    function ke_list_tugas(){
      $data = array (
        'data' => array(
          'nilai' =>$this->M_murid->listData('t_nilai_tugas', '*'),
          'tugas' =>$this->M_murid->whereData('t_tugas', array('no_tugas' => 4)),
        ),
      );
      $this->load->view('lihat_nilai_murid', $data);
    }

    function getJudulTugas($noTugas){
      $where = array(
        'no_tugas' => $noTugas,
      );
      return $this->M_murid->listData('t_tugas', $where);
    }

    function aksi_logout(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
  }
?>
