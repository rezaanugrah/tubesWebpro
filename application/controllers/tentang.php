<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Tentang extends CI_Controller {
    function __construct(){
      parent::__construct();
    }

    function index(){
      $this->load->view('tentang_homeschooling');
    }

    function aksi_logout(){
      $this->session->sess_destroy();
      redirect(base_url(''));
    }
  }
?>
